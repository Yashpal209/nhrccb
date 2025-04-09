<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Web\Pages\JoinUs;
use TCPDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function generateCertificate($id)
    {
        $user = JoinUs::findOrFail($id);
        $specialLevels = ['NATIONAL TEAM', 'STATE TEAM', 'DISTRICT TEAM', 'DIVISION TEAM', 'BLOCK TEAM'];

        if ($user->level === 'ACTIVE MEMBER') {
            $background = public_path('admin/assets/images/print/Certificate1.jpg');
            $designation = 'Active Member';
            $validity = '3 years';
            $html = "
                <div style='text-align: justify; font-size: 15pt;'>has been approved as an <strong style='font-size:16pt'>Active Member</strong> of the National Human Rights and Crime Control Bureau, Who will be working with the team for the protection and promotion of Human Rights,
                    Crime Prevention activities with the support of government administration.
                </div>
            ";
        } elseif (in_array($user->level, $specialLevels)) {
            $background = public_path('admin/assets/images/print/Certificate2.jpg');
            $designation = strtoupper($user->designation);
            $division = strtoupper($user->division);
            $state = strtoupper($user->state);
            $district = strtoupper($user->district);
            $block = strtoupper($user->block);

            $validity = '1 year';

            if ($user->level === 'STATE TEAM') {
                $designationText = "$designation / $state";
            } elseif ($user->level === 'BLOCK TEAM') {
                $designationText = "$designation / $block";
            } else if ($user->level === 'DIVISION TEAM') {
                $designationText = "$designation / $division";
            } elseif ($user->level === 'DISTRICT TEAM') {
                $designationText = "$designation / $district";
            } else {
                $designationText = "$designation ";
            }

            $html = "
                <div style='text-align: justify; font-size: 15pt;'>has been approved as <strong style='font-size:16pt'>$designationText</strong> of the National Human Rights and Crime Control Bureau, Who will be working with the team for the protection and promotion of Human Rights,
                    Crime Prevention activities with the support of government administration.
                </div>
            ";
        } else {
            return redirect()->back()->with('error', 'This Letter Not For This User Level.');
        }


        ob_end_clean();
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle($user->name);
        $pdf->SetAutoPageBreak(false, 0);
        $pdf->AddPage();
        $pdf->Image($background, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFont('helvetica', '', 16);
        $pdf->SetXY(15, 110);
        $pdf->MultiCell(180, 10, "This is to certify that", 0, 'C', false);

        $pdf->SetFont('helvetica', 'B', 17);
        $pdf->SetXY(15, 120);
        $pdf->MultiCell(180, 10, strtoupper($user->name), 0, 'C', false);

        $pdf->SetFont('helvetica', '', 15);
        $pdf->writeHTMLCell(180, 0, 15, 135, $html, 0, 1, false, true, 'J');

        $pdf->SetFont('helvetica', 'B', 15);
        $pdf->SetXY(15, 175);
        $pdf->Cell(180, 10, "Unique ID: " . $user->reg_no, 0, 1);

        $pdf->SetFont('helvetica', 'B', 15);
        $pdf->SetXY(15, 182);
        $pdf->Cell(180, 10, "Issue Date: " . $user->updated_at->format('d-m-Y'), 0, 1);

        $signaturePath = public_path('admin/assets/images/signature/sign.png');
        $pdf->Image($signaturePath, 145, 215, 50, 25, '', '', '', false, 300, '', false, false, 0);

        $signaturePath2 = public_path('admin/assets/images/signature/stump2.png');
        $pdf->Image($signaturePath2, 100, 230, 34, 35, '', '', '', false, 300, '', false, false, 0);


        $pdf->SetFont('helvetica', '', 15);
        $pdf->SetXY(15, 230);
        $pdf->Cell(180, 10, "(National President)", 0, 1, 'R');

        $pdf->SetFont('helvetica', 'B', 15);
        $pdf->SetTextColor(255, 0, 0);
        $pdf->SetXY(15, 245);
        $pdf->Cell(180, 10, "(Valid: $validity from issue date)", 0, 1, 'L');

        $fileName = $user->id . '_certificate.pdf';

        // Store directly in public/uploads/certificate
        $filePath = public_path('uploads/certificate/' . $fileName);

        // Generate and save the PDF
        $pdf->Output($filePath, 'F');


        $user->certificate = '/uploads/certificate/' . $fileName;
        $user->save();

        // Mail::send([], [], function ($message) use ($user, $filePath) {
        //     $message->to($user->email)
        //         ->subject('Your Membership Certificate')
        //         ->attach($filePath, [
        //             'as' => 'Membership_Certificate.pdf',
        //             'mime' => 'application/pdf',
        //         ])
        //         ->html('<p>Dear ' . $user->name . ',</p><p>Attached is your membership certificate.</p><p>Best regards,<br>Your Organization</p>');
        // });

        // return response()->json(['message' => 'Certificate generated and sent successfully!', 'file' => asset('storage/' . $fileName)]);
        // return response($pdf->Output('Certificate.pdf', 'I'))
        //     ->header('Content-Type', 'application/pdf');
        return redirect()->back()->with('alert', 'Certificate generated successfully.');
    }


    public function generateLetter($id)
    {
        // Retrieve User
        $user = JoinUs::findOrFail($id);
        $specialLevels = ['NATIONAL TEAM', 'STATE TEAM', 'DISTRICT TEAM', 'DIVISION TEAM', 'BLOCK TEAM'];
        if (!in_array($user->level, $specialLevels)) {
            return redirect()->back()->with('error', 'You are not authorized to generate this letter.');
        }

        // Use user's registration number as reference number
        $refNo =  $user->reg_no;
        $issueDate = $user->updated_at->format('d/m/Y');

        // Generate level-based designation/location string
        if ($user->level == 'NATIONAL TEAM') {
            $designationLine = strtoupper($user->designation);
        } elseif ($user->level == 'STATE TEAM') {
            $designationLine = strtoupper($user->designation) . ' / ' . strtoupper($user->state);
        } elseif ($user->level == 'DISTRICT TEAM') {
            $designationLine = strtoupper($user->designation) . ' / ' . strtoupper($user->district) . ' / ' . strtoupper($user->state);
        } elseif ($user->level == 'DIVISION TEAM') {
            $designationLine = strtoupper($user->designation) . ' / ' . strtoupper($user->division) . ' / ' . strtoupper($user->state);
        } elseif ($user->level == 'BLOCK TEAM') {
            $designationLine = strtoupper($user->designation) . ' / ' . strtoupper($user->block) . ' / ' . strtoupper($user->district) . ' / ' . strtoupper($user->state);
        } else {
            $designationLine = strtoupper($user->designation);
        }

        // HTML Content for the Body (Justified)
        $html = '<div style="text-align: justify; font-size: 11px;">
        <p>Appraising your dedicated efforts for social welfare and human rights,
        National Human Rights and Crime Control Bureau appoints you as 
        <b>' . $designationLine . '.</b></p>
        <p>NHRCCB takes this opportunity to welcome you to the organization. We work for the protection and promotion of human  rights under the 
        Human Rights Protection Act 1993 of the Indian Constitution and the 
        Universal Declaration of Human Rights (UDHR) from article 1 to 30.</p>
        <p>With heartfelt wishes from the organization, you are expected to extend your sincere services to the organization from   the date of joining  <b>(' . $issueDate . ')</b>.</p>
        <p>All Government officials, Police Officers, and Government agencies are humbly requested to cooperate with your unique    ID No. 
        <b>' . $user->reg_no . '</b>, valid for <b>1 year</b> from the date of joining.</p>
         </div>';
        // Define background image
        $background = public_path('admin/assets/images/print/Letter1.jpg');

        // Clean any previous output
        ob_end_clean();

        // Create a new PDF instance
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle($user->name);

        // Set margins and disable auto page break initially
        $pdf->SetMargins(0, 0, 0);
        $pdf->SetAutoPageBreak(false, 0);

        // Add a page
        $pdf->AddPage();

        // Set Background Image
        $pdf->Image($background, 0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), '', '', '', false, 300, '', false, false, 0);

        // Re-enable auto page break for content
        $pdf->SetAutoPageBreak(true, 10);
        $pdf->SetTextColor(0, 0, 0);

        // Letter Header
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->SetXY(10, 70);
        $pdf->MultiCell(190, 10, "Ref. No: $refNo", 0, 'R', false);

        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->SetXY(10, 78);
        $pdf->Cell(190, 10, "(Appointment Letter)", 0, 1, 'C', false);
        $pdf->SetLineWidth(0.5);
        $pdf->Line(82, 86, 128, 86);

        // Letter Content
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->SetXY(15, 90);
        $pdf->MultiCell(190, 0, strtoupper($user->name) . ",\n", 0, 'L', false);



        // Set Font and Add HTML Content in Justified Alignment
        $pdf->SetFont('helvetica', '', 12);
        $pdf->writeHTMLCell(185, 0, 15, 90, $html, 0, 0, false, true, 'J');

        $pdf->SetXY(10, 165);
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->MultiCell(190, 8, "Thanking You,\n\n", 0, 'R', false);

        $pdf->SetXY(10, 190); // Adjust position below the image
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->MultiCell(190, 8, "(National President)", 0, 'R', false);

        // Add signature image
        $signaturePath = public_path('admin/assets/images/signature/sign.png');
        $pdf->Image($signaturePath, 155, 170, 40, 25, '', '', '', false, 300, '', false, false, 0);

        $signaturePath2 = public_path('admin/assets/images/signature/stump2.png');
        $pdf->Image($signaturePath2, 105, 235, 30, 30, '', '', '', false, 300, '', false, false, 0);

        $signaturePath = public_path('admin/assets/images/signature/sign.png');
        $pdf->Image($signaturePath, 155, 208, 40, 25, '', '', '', false, 300, '', false, false, 0);

        $signaturePath2 = public_path('admin/assets/images/signature/stump1.png');
        $pdf->Image($signaturePath2, 149, 225, 55, 20, '', '', '', false, 300, '', false, false, 0);

        $pdf->SetXY(10, 225); // Adjust position below the image
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->MultiCell(190, 8, "(National President)", 0, 'R', false);

        $pdf->SetXY(15, 190);
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->MultiCell(190, 15, "Note:", 0, 'L', false);

        $pdf->SetXY(15, 195);
        $pdf->SetFont('helvetica', '', 10);
        $pdf->MultiCell(190, 15, "To verify this officer/ID card, please login to www.nhrccb.org.\nNHRCCB is not responsible for illegal activities done by you.\n\n", 0, 'J', false);

        $pdf->SetXY(15, 207);
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->MultiCell(190, 15, "Copy of Information:", 0, 'L', false);

        $pdf->SetXY(15, 212);
        $pdf->SetFont('helvetica', '', 11);
        $pdf->MultiCell(190, 15, "Hon’ble P.S In-Charge / " . strtoupper($user->policeStation) . "\nHon’ble Superintendent of Police / " . strtoupper($user->district) . "\nHon’ble State President NHRCCB / " . strtoupper($user->state), 0, 'L', false);

        // Address Section
        $pdf->SetXY(15, 234);
        $pdf->SetFont('helvetica', 'B', 11);
        $pdf->MultiCell(190, 15, "TO,\n" . strtoupper($user->name) . "\nS/O " . strtoupper($user->fathersName) . "\n" . strtoupper($user->address) . "\n", 0, 'L', false);

        $fileName = 'appointment_letter_' . $user->id . '.pdf';
        $filePath = public_path('uploads/letters/' . $fileName);

        // Ensure the directory exists
        if (!file_exists(public_path('uploads/letters'))) {
            mkdir(public_path('uploads/letters'), 0777, true);
        }

        // Save the PDF file
        $pdf->Output($filePath, 'F');

        // Save the relative path in the database
        $user->letter = '/uploads/letters/' . $fileName;
        $user->save();

        // Mail::send([], [], function ($message) use ($user, $filePath) {
        //     $message->to($user->email)
        //         ->subject('Your Appointment Letter')
        //         ->attach($filePath, [
        //             'as' => 'Appointment_Letter.pdf',
        //             'mime' => 'application/pdf',
        //         ])
        //         ->html('<p>Dear ' . $user->name . ',</p>
        //                 <p>Congratulations! Please find attached your appointment letter.</p>
        //                 <p>Best regards,<br>National Human Rights and Crime Control Bureau</p>');
        // });
        // Output PDF to browser
        // return response($pdf->Output('appointment_letter.pdf', 'I'))
        //     ->header('Content-Type', 'application/pdf');
        return redirect()->back()->with('alert', 'Letter generated successfully.');
    }


    public function officerIdcard($id)
    {
        // Retrieve User
        $user = JoinUs::findOrFail($id);

        // Allowed levels for ID card generation
        $allowedLevels = [
            "NATIONAL TEAM",
            "STATE TEAM",
            "DISTRICT TEAM",
            "DIVISION TEAM",
            "BLOCK TEAM",
        ];

        // Check if user level is allowed
        if (!in_array($user->level, $allowedLevels)) {
            return redirect()->back()->with('error', 'You are not Officer to generate this letter.');
        }
        // return $user;
        // User details
        $refNo = $user->reg_no;
        $issueDate = $user->updated_at->format('d/m/Y');

        // Paths
        $background = public_path('admin/assets/images/print/1.1 Officer ID Card  (Front).jpg');
        $backSide = public_path('admin/assets/images/print/1.2 Officer ID Card  (Back).jpg');
        $signaturePath = public_path('admin/assets/images/signature/sign.png');
        $stampPath = public_path('admin/assets/images/signature/stump2.png');

        // ID Card Size (Width: 54mm, Height: 86mm)
        $idCardSize = [54, 86];

        // Clean previous output
        ob_end_clean();

        // Create a new PDF instance
        $pdf = new TCPDF('P', 'mm', $idCardSize, true, 'UTF-8', false);
        $pdf->SetTitle("ID Card - " . $user->name);
        $pdf->SetMargins(0, 0, 0);
        $pdf->SetAutoPageBreak(false, 0);

        // Add Front Page
        $pdf->AddPage();
        $pdf->Image($background, 0, 0, 54, 86, '', '', '', false, 300, '', false, false, 0);


        $signaturePath2 = $user->passport_image;
        $pdf->Image($signaturePath2, 20, 33, 14, 15, '', '', '', false, 300, '', false, false, 0);


        // Set Text Color
        $pdf->SetTextColor(0, 0, 0);

        // Name
        $textStartX = 6;
        $pdf->SetFont('helvetica', 'B', 7);
        $pdf->SetXY(5, 50);
        $pdf->Cell(44, 5, strtoupper($user->name), 0, 1, 'C');

        // ID No
        $pdf->SetFont('helvetica', 'B', 5);
        $pdf->SetXY($textStartX, 53);
        $pdf->Cell(44, 5, "Unique ID No ", 0, 1, 'L');

        $pdf->SetFont('helvetica', 'B', 5);
        $pdf->SetXY(17.5, 53);
        $pdf->Cell(44, 5, ": " . $refNo, 0, 1, 'L');

        // Designation
        $pdf->SetFont('helvetica', 'B', 5);
        $pdf->SetXY($textStartX, 55);
        $pdf->Cell(44, 5, "Designation ", 0, 1, 'L');

        $pdf->SetFont('helvetica', 'B', 4);
        $pdf->SetXY(17.5, 55);

        if ($user->level == "NATIONAL TEAM") {
            $pdf->Cell(44, 5, ": " . strtoupper($user->designation), 0, 1, 'L');
        } elseif ($user->level == "STATE TEAM") {
            $pdf->Cell(44, 5, ": " . strtoupper($user->designation) . "/" . strtoupper($user->state), 0, 1, 'L');
        } elseif ($user->level == "DIVISION TEAM") {
            $pdf->Cell(44, 5, ": " . strtoupper($user->designation) . "/" . strtoupper($user->division), 0, 1, 'L');
        } elseif ($user->level == "DISTRICT TEAM") {
            $pdf->Cell(44, 5, ": " . strtoupper($user->designation) . "/" . strtoupper($user->district), 0, 1, 'L');
        } elseif ($user->level == "BLOCK TEAM") {
            $pdf->Cell(44, 5, ": " . strtoupper($user->designation) . "/" . strtoupper($user->block), 0, 1, 'L');
        } else {
            $pdf->Cell(44, 5, ": " . strtoupper($user->designation), 0, 1, 'L');
        }
        // Issue Date
        $pdf->SetFont('helvetica', 'B', 5);
        $pdf->SetXY($textStartX, 57);
        $pdf->Cell(44, 5, "Issue Date: ", 0, 1, 'L');

        $pdf->SetXY(17.5, 57);
        $pdf->Cell(44, 5, ": " . $issueDate, 0, 1, 'L');

        // Address
        $pdf->SetXY($textStartX, 60.5);
        $pdf->MultiCell(44, 5, "Address ", 0, 'L');
        $pdf->SetXY(17.5, 60.5);
        $pdf->MultiCell(44, 5, ": " . $user->address, 0, 'L');

        // Signature & Stamp
        if (file_exists($signaturePath)) {
            $pdf->Image($signaturePath, 32, 71, 20, 10, '', '', '', false, 300, '', false, false, 0);
        }

        if (file_exists($stampPath)) {
            $pdf->Image($stampPath, 25, 72, 10, 10, '', '', '', false, 300, '', false, false, 0);
        }

        // Add Back Page
        $pdf->AddPage();
        $pdf->Image($backSide, 0, 0, 54, 86, '', '', '', false, 300, '', false, false, 0);

        $fileName = 'idCard_' . $user->id . '.pdf';
        $filePath = public_path('uploads/idcard/' . $fileName);

        // Ensure the directory exists
        if (!file_exists(public_path('uploads/idcard'))) {
            mkdir(public_path('uploads/idcard'), 0777, true);
        }

        // Save the PDF file
        $pdf->Output($filePath, 'F');

        // Save the relative path in the database
        $user->id_card = '/uploads/idcard/' . $fileName;
        $user->save();

        // Mail::send([], [], function ($message) use ($user, $filePath) {
        //     $message->to($user->email)
        //         ->subject('Your ID card ')
        //         ->attach($filePath, [
        //             'as' => 'idCard.pdf',
        //             'mime' => 'application/pdf',
        //         ])
        //         ->html('<p>Dear ' . $user->name . ',</p>
        //                 <p>Congratulations! Please find attached your ID card.</p>
        //                 <p>Best regards,<br>National Human Rights and Crime Control Bureau</p>');
        // });
        // Output PDF
        // return response($pdf->Output('id_card.pdf', 'I'))->header('Content-Type', 'application/pdf');
        return redirect()->back()->with('alert', 'ID Card generated successfully.');
    }
    public function generateidcard($id)
    {
        // Retrieve User
        $user = JoinUs::findOrFail($id);

        if ($user->level === 'ACTIVE MEMBER') {
            $background = public_path('admin/assets/images/print/2.1 Active Mamber ID Card.jpg');
            $backSide = public_path('admin/assets/images/print/2.2 Active Mamber ID Card (Back).jpg');
            $validityPeriod = '3 Years';
        } elseif ($user->level === 'VOLUNTEER') {
            $background = public_path('admin/assets/images/print/3.1 Voulenter ID Card (Front).jpg');
            $backSide = public_path('admin/assets/images/print/3.2 Voulenter ID Card (Back).jpg');
            $validityPeriod = '5 Years';
        } else {
            return redirect()->back()->with('error', 'You are not authorized to generate this ID card.');
        }

        // User details
        $refNo = $user->reg_no;
        $issueDate = $user->updated_at->format('d/m/Y');

        // Paths
        $signaturePath = public_path('admin/assets/images/signature/sign.png');
        $stampPath = public_path('admin/assets/images/signature/stump2.png');

        // ID Card Size (in mm)
        $idCardSize = [86, 54]; // (Width: 86mm, Height: 54mm)

        // Clean previous output
        ob_end_clean();

        // Create a new PDF instance
        $pdf = new TCPDF('L', 'mm', $idCardSize, true, 'UTF-8', false);
        $pdf->SetTitle("ID Card - " . $user->name);
        $pdf->SetMargins(0, 0, 0);
        $pdf->SetAutoPageBreak(false, 0);

        // Add Front Page
        $pdf->AddPage();
        $pdf->Image($background, 0, 0, 86, 54, '', '', '', false, 300, '', false, false, 0);

        // Add Profile Photo (inside the yellow circle)


        // Set Text Color
        $pdf->SetTextColor(0, 0, 0);

        // Define text positions
        $textStartX = 14;
        $pdf->SetFont('helvetica', 'B', 5);

        // Name
        $pdf->SetXY($textStartX, 26);
        $pdf->Cell(40, 5, "Name ", 0, 1, 'L');

        $pdf->SetXY(26, 26);
        $pdf->Cell(40, 5, ": " . strtoupper($user->name), 0, 1, 'L');

        // ID No

        $pdf->SetFont('helvetica', 'B', 5);
        $pdf->SetXY($textStartX, 29);
        $pdf->Cell(40, 5, "Unique ID No ", 0, 1, 'L');


        $pdf->SetXY(26, 29);
        $pdf->Cell(40, 5, ": " . $refNo, 0, 1, 'L');

        // Issue Date
        $pdf->SetFont('helvetica', 'B', 5);
        $pdf->SetXY($textStartX, 32);
        $pdf->Cell(40, 5, "Issue Date ", 0, 1, 'L');
        $pdf->SetXY(26, 32);
        $pdf->Cell(40, 5, ": " . $issueDate, 0, 'L');

        // Address
        $pdf->SetFont('helvetica', 'B', 5);
        $pdf->SetXY($textStartX, 35);
        $pdf->Cell(40, 5, "Address ", 0, 0, 'L');

        $pdf->SetFont('helvetica', 'B', 5);
        $pdf->SetXY($textStartX + 12, 36.5);
        $pdf->MultiCell(50, 5, ": " . $user->address, 0, 'L'); // Increase width to fit long addresses


        $signaturePath2 = $user->passport_image;
        $pdf->Image($signaturePath2, 60, 23, 15, 15, '', '', '', false, 300, '', false, false, 0);


        $pdf->Image($signaturePath, 60, 42, 15, 8, '', '', '', false, 300, '', false, false, 0, 'C', false, false, 1);

        // Add Stamp (next to the signature)
        $pdf->Image($stampPath, 50, 40, 13, 13, '', '', '', false, 300, '', false, false, 0, 'C', false, false, 1);

        // Add Back Page
        $pdf->AddPage();
        $pdf->Image($backSide, 0, 0, 86, 54, '', '', '', false, 300, '', false, false, 0);

        $fileName = 'idCard_' . $user->id . '.pdf';
        $filePath = public_path('uploads/idcard/' . $fileName);

        // Ensure the directory exists
        if (!file_exists(public_path('uploads/idcard'))) {
            mkdir(public_path('uploads/idcard'), 0777, true);
        }

        // Save the PDF file
        $pdf->Output($filePath, 'F');

        // Save the relative path in the database
        $user->id_card = '/uploads/idcard/' . $fileName;
        $user->save();

        // Mail::send([], [], function ($message) use ($user, $filePath) {
        //     $message->to($user->email)
        //         ->subject('Your ID card ')
        //         ->attach($filePath, [
        //             'as' => 'idCard.pdf',
        //             'mime' => 'application/pdf',
        //         ])
        //         ->html('<p>Dear ' . $user->name . ',</p>
        //                 <p>Congratulations! Please find attached your ID card.</p>
        //                 <p>Best regards,<br>National Human Rights and Crime Control Bureau</p>');
        // });
        // Output PDF
        // return response($pdf->Output('id_card.pdf', 'I'))->header('Content-Type', 'application/pdf');
        return redirect()->back()->with('alert', 'Id Card generated successfully.');
    }
}
