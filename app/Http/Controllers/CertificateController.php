<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Web\Pages\JoinUs;
use TCPDF;

class CertificateController extends Controller
{
    public function generateCertificate($id)
    {
        // Retrieve User
        $user = JoinUs::findOrFail($id);

        // Define special levels
        $specialLevels = ['NATIONAL TEAM', 'STATE TEAM', 'DISTRICT TEAM', 'DIVISION TEAM', 'BLOCK TEAM'];

        // Determine certificate type and background
        if ($user->level === 'ACTIVE MEMBERSHIP') {
            $background = public_path('admin/assets/images/print/Certificate1.jpg');
            $designation = 'Active Member';
            $validity = '3 years';

            // HTML content for Active Membership
            $html = "
                <div style='text-align: center; font-size: 14pt;'>
                    has been approved as an <strong>Active Member</strong> of the National Human Rights and Crime Control Bureau.
                    They will be working with the team for the protection and promotion of Human Rights,
                    Crime Prevention activities with the support of government administration.
                </div>
            ";
        } elseif (in_array($user->level, $specialLevels)) {
            $background = public_path('admin/assets/images/print/Certificate2.jpg');
            $designation = strtoupper($user->designation); // Use exact level name
            $validity = '1 year';

            // HTML content for Special Team Levels
            $html = "
                <div style='text-align: center; font-size: 14pt;'>
                    has been approved as <strong>$designation</strong> of the National Human Rights and Crime Control Bureau.
                    They will be working with the team for the protection and promotion of Human Rights,
                    Crime Prevention activities with the support of government administration.
                </div>
            ";
        } else {
            return response()->json(['error' => 'User does not have a valid designation.'], 403);
        }

        // Clean any previous output
        ob_end_clean();

        // Create a new PDF instance
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle($user->name);
        $pdf->SetAutoPageBreak(false, 0);

        // Add a page
        $pdf->AddPage();

        // Set Background Image
        $pdf->Image($background, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);

        // Set text color to black
        $pdf->SetTextColor(0, 0, 0);

        // Title Text
        $pdf->SetFont('helvetica', '', 15);
        $pdf->SetXY(15, 110);
        $pdf->MultiCell(180, 10, "This is to certify that", 0, 'C', false);

        // User Name (Bold)
        $pdf->SetFont('helvetica', 'B', 16);
        $pdf->SetXY(15, 120);
        $pdf->MultiCell(180, 10, strtoupper($user->name), 0, 'C', false);

        // Certificate Body Text
        $pdf->SetFont('helvetica', '', 14);
        $pdf->writeHTMLCell(180, 0, 15, 135, $html, 0, 1, false, true, 'C');

        // Unique ID
        $pdf->SetFont('helvetica', '', 14);
        $pdf->SetXY(15, 175);
        $pdf->Cell(180, 10, "Unique ID:" . $user->reg_no, 0, 1);

        // Issue Date
        $pdf->SetXY(15, 182);
        $pdf->Cell(180, 10, "Issue Date: " . $user->updated_at->format('d-m-Y'), 0, 1);

        // Signature
        $pdf->SetFont('helvetica', '', 14);
        $pdf->SetXY(15, 240);
        $pdf->Cell(180, 10, "(National President)", 0, 1, 'R');

        // Validity Period (Dynamic)
        $pdf->SetXY(15, 245);
        $pdf->Cell(180, 10, "(Valid: $validity from issue date)", 0, 1, 'L');

        // Output PDF to browser
        return response($pdf->Output('designation_certificate.pdf', 'I'))
            ->header('Content-Type', 'application/pdf');
    }

    public function generateLetter($id)
    {
        // Retrieve User
        $user = JoinUs::findOrFail($id);

        // Use user's registration number as reference number
        $refNo = $user->reg_no;
        $issueDate = $user->updated_at->format('d/m/Y');

        // Define background image
        $background = public_path('admin/assets/images/print/Letter1.jpg');

        // Clean any previous output
        ob_end_clean();

        // Create a new PDF instance
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle("Appointment Letter - " . $user->name);

        // Set margins to zero for full background coverage
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
        $pdf->SetFont('helvetica', 'B', 13);
        $pdf->SetXY(10, 70);
        $pdf->MultiCell(190, 10, "Ref. No: $refNo", 0, 'R', false);

        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->SetXY(10, 74);
        $pdf->Cell(190, 10, "Appointment Letter", 0, 1, 'C', false);
        $pdf->SetLineWidth(0.5);
        $pdf->Line(80, 83, 130, 83); // Underline for "Appointment Letter"

        // Letter Content
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->SetXY(10, 90);
        $pdf->MultiCell(190, 8, strtoupper($user->name) . ",\n", 0, 'L', false);
        
        $pdf->SetFont('helvetica', '', 12);
        $pdf->SetXY(10, 97);
        $pdf->MultiCell(190, 10, "Appraising your dedicated efforts for social welfare and human rights, National Human Rights and Crime Control Bureau appoints you as " . strtoupper($user->designation) . ".\n\n", 0, 'L', false);

        $pdf->SetXY(10, 110);
        $pdf->MultiCell(190, 10, "NHRCCB takes this opportunity to welcome you to the organization. We, as a team, work for the protection and promotion of human rights under the Human Rights Protection Act 1993 of the Indian Constitution and the Universal Declaration of Human Rights (UDHR) from article 1 to 30.\n\n", 0, 'L', false);


        $pdf->SetXY(10, 128);
        $pdf->MultiCell(190, 8, "With heartfelt wishes from the organization, you are expected to extend your sincere services to the organization from the date of joining ($issueDate).\n\n", 0, 'L', false);


        $pdf->SetXY(10, 142);
        $pdf->MultiCell(190, 8, "All Government officials, Police Officers, and Government agencies are humbly requested to cooperate with your unique ID No. " . $user->reg_no . ", valid for 1 year from the letter issue date.\n\n", 0, 'L', false);

        $pdf->SetXY(10, 160);
        // Thanking You Section
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->MultiCell(190, 8, "Thanking You,\n\n", 0, 'R', false);

        // Signature
        $pdf->SetXY(10, 180);
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->MultiCell(190, 8, "(National President)\n\n", 0, 'R', false);

        $pdf->SetXY(10, 180);
        // Additional Information Section
        $pdf->SetFont('helvetica', '', 11);
        $pdf->MultiCell(190, 8, "Note:\nTo verify this officer/ID card, please login to www.nhrccb.org.\nNHRCCB is not responsible for illegal activities done by you.\n\n", 0, 'L', false);

        $pdf->SetXY(10, 196);
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->MultiCell(190, 8, "Copy of Information:\n ", 0, 'L', false);

        $pdf->SetXY(10, 202);
        $pdf->SetFont('helvetica', '', 12);
        $pdf->MultiCell(190, 8, " Hon’ble P.S In-Charge /".$user->policeStation."\n Hon’ble Superintendent of Police /\n Hon’ble State President NHRCCB\n\n", 0, 'L', false);

        // Address Section
        $pdf->SetXY(10, 220);
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->MultiCell(190, 8, "TO,\n" . "MR.\Mrs " . strtoupper($user->name) . "\n", 0, 'L', false);

        $pdf->SetXY(10, 230);
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->MultiCell(190, 8, "S/O. " . strtoupper($user->fathersName) . "\n", 0, 'L', false);

        $pdf->SetXY(10, 235);
        $pdf->MultiCell(190, 8, strtoupper($user->address) . " " . "\n", 0, 'L', false);

        // Output PDF to browser
        return response($pdf->Output('appointment_letter.pdf', 'I'))
            ->header('Content-Type', 'application/pdf');
    }

    public function generateidcard($id)
{
    // Retrieve User
    $user = JoinUs::findOrFail($id);

    // Allowed levels
    $allowedLevels = [
        "NATIONAL TEAM",
        "STATE TEAM",
        "DISTRICT TEAM",
        "DIVISION TEAM",
        "BLOCK TEAM",
    ];

    // Check if user level is allowed
    if (!in_array($user->level, $allowedLevels)) {
        return response()->json(['error' => 'User not authorized for an ID card.'], 403);
    }

    // User details
    $refNo = $user->reg_no;
    $issueDate = $user->updated_at->format('d/m/Y');
    $validTill = date('d/m/Y', strtotime($issueDate . ' +1 year'));

    // Paths
    $background = public_path('admin/assets/images/print/1.1 Officer ID Card  (Front).jpg');
    $backSide = public_path('admin/assets/images/print/1.2 Officer ID Card  (Back).jpg');
    $signaturePath = public_path('uploads/signatures/' . $user->signature);
    $stampPath = public_path('admin/assets/images/stamp.png');

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

    // Add Rounded Profile Photo
    if (file_exists($user->passport_image)) {
        $pdf->Image($user->passport_image, 15, 5, 24, 24, '', '', '', false, 300, '', false, false, 0, 'C', false, false, 1);
    }

    // Set Text Color
    $pdf->SetTextColor(0, 0, 0); // Black text

    // Name
    $textStartX = 8;
    $pdf->SetFont('helvetica', 'B', 7);
    $pdf->SetXY(5, 32);
    $pdf->Cell(44, 5, strtoupper($user->name), 0, 1, 'C');

    // ID No
    $pdf->SetFont('helvetica', '', 5);
    $pdf->SetXY($textStartX, 35);
    $pdf->Cell(44, 5, "ID No: $refNo", 0, 1, 'L');

    // Designation
    $pdf->SetXY($textStartX, 37);
    $pdf->Cell(44, 5, "Designation: " . strtoupper($user->designation), 0, 1, 'L');

    // Issue Date
    $pdf->SetXY($textStartX, 39);
    $pdf->Cell(44, 5, "Issue Date: " . $issueDate, 0, 1, 'L');

    // Valid Till
    $pdf->SetXY($textStartX, 41);
    $pdf->Cell(44, 5, "Valid Till: " . $validTill, 0, 1, 'L');

    // Address
    $pdf->SetXY($textStartX, 44);
    $pdf->MultiCell(44, 8, "Address: " . $user->address, 0, 'L');

    // Signature & Stamp
    if (file_exists($signaturePath)) {
        $pdf->Image($signaturePath, 5, 76, 20, 10, '', '', '', false, 300, '', false, false, 0);
    }

    if (file_exists($stampPath)) {
        $pdf->Image($stampPath, 32, 75, 17, 17, '', '', '', false, 300, '', false, false, 0);
    }

    // Add Back Page
    $pdf->AddPage();
    $pdf->Image($backSide, 0, 0, 54, 86, '', '', '', false, 300, '', false, false, 0);

    // Output PDF
    return response($pdf->Output('id_card.pdf', 'I'))
        ->header('Content-Type', 'application/pdf');
}

}
