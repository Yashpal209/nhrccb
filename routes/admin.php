<?php

use App\Http\Controllers\Admin\Activities\Covid19controller;
use App\Http\Controllers\Admin\Activities\EducationalAwarenessController;
use App\Http\Controllers\Admin\Activities\RuralAwarenessController;
use App\Http\Controllers\Admin\Activities\SeminarController;
use App\Http\Controllers\Admin\Activities\AwardsController;
use App\Http\Controllers\Admin\Activities\SocialWorkController;
use App\Http\Controllers\Admin\Activities\StandwithNationController;
use App\Http\Controllers\Admin\Activities\WorkshopController;
use App\Http\Controllers\Admin\Administration\StatePresidentController;
use App\Http\Controllers\Admin\Administration\NationalPatronController;
use App\Http\Controllers\Admin\Administration\NationalExecutiveController;
use App\Http\Controllers\Admin\Administration\OfficestaffController;
use App\Http\Controllers\Admin\CellUnit\AntHumanTrfController;
use App\Http\Controllers\Admin\CellUnit\AntiCorruptionController;
use App\Http\Controllers\Admin\CellUnit\ChildRightCellController;
use App\Http\Controllers\Admin\CellUnit\CrimeControlController;
use App\Http\Controllers\Admin\CellUnit\DoctorCellController;
use App\Http\Controllers\Admin\CellUnit\EducationalCellController;
use App\Http\Controllers\Admin\CellUnit\LegalCellController;
use App\Http\Controllers\Admin\CellUnit\MediaCellController;
use App\Http\Controllers\Admin\CellUnit\RtiCellController;
use App\Http\Controllers\Admin\CellUnit\TribalRightController;
use App\Http\Controllers\Admin\ComplainController;
use App\Http\Controllers\Admin\Gallery\AcknowledgementController;
use App\Http\Controllers\Admin\Gallery\ActionTakRepoController;
use App\Http\Controllers\Admin\Gallery\ElectronicMediaController;
use App\Http\Controllers\Admin\Gallery\GovtlettersController;
use App\Http\Controllers\Admin\Gallery\OfficerInteractionController;
use App\Http\Controllers\Admin\Gallery\PhotoController;
use App\Http\Controllers\Admin\Gallery\PoliceLetterController;
use App\Http\Controllers\Admin\Gallery\PrintMediaController;
use App\Http\Controllers\Admin\Gallery\VideoGalleryController;
use App\Http\Controllers\Admin\Gallery\WebMediaController;
use App\Http\Controllers\Admin\Joining\JoiningController;
use App\Http\Controllers\Admin\Notification\LatestUpdateController;
use App\Http\Controllers\Admin\Notification\WhatsNewController;
use App\Http\Controllers\Admin\OurAwardeeController;
use App\Http\Controllers\Admin\OurTeam\ActiveMemberController;
use App\Http\Controllers\Admin\OurTeam\BlockTeamController;
use App\Http\Controllers\Admin\OurTeam\DistrictTeamController;
use App\Http\Controllers\Admin\OurTeam\DivisionTeamController;
use App\Http\Controllers\Admin\OurTeam\InternController;
use App\Http\Controllers\Admin\OurTeam\NationalTeamController;
use App\Http\Controllers\Admin\OurTeam\StateTeamController;
use App\Http\Controllers\Admin\OurTeam\VolunteerController;
use App\Http\Controllers\Admin\OurTeam\ZoneTeamController;
use App\Http\Controllers\Admin\Publication\AnnualReportController;
use App\Http\Controllers\Admin\Publication\ConvocationController;
use App\Http\Controllers\Admin\Publication\JournalController;
use App\Http\Controllers\Admin\Publication\MonthlyReport;
use App\Http\Controllers\Admin\Publication\ProspectusController;
use App\Http\Controllers\Admin\Publication\RulebookController;
use App\Http\Controllers\Admin\Publication\SouvenierController;
use App\Http\Controllers\Admin\WebManage\WebManageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;


// Main dashboard
Route::get('/admin', function () {
    if (session()->has('admin')) {
        return view('admin.dashboard');
    } else {
        return redirect('/login');
    }
});

// Authentication routes
Route::get('/login', [AuthController::class, 'loginform'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logOut'])->name('logOut');

// Admin routes

Route::prefix('admin')->middleware('admin.auth')->group(function () {
    // Admin dashboard
    // banner 
    Route::get('Banner', [WebManageController::class, 'banner'])->name('banners');
    Route::post('addBannerPost', [WebManageController::class, 'addBannerPost'])->name('addBannerPost');
    Route::get('editBanner/{id}', [WebManageController::class, 'editBanner'])->name('banner.edit');
    Route::post('/updateBannerPost', [WebManageController::class, 'updateBannerPost'])->name('updateBannerPost');
    Route::get('viewBanner', [WebManageController::class, 'viewBanner'])->name('viewBanner');
    Route::get('banner/delete/{id}', [WebManageController::class, 'deleteBanner'])->name('banner.delete');

    // about us 
    // president mesage profile 
    Route::get('AddPresident', [WebManageController::class, 'president'])->name('president');
    Route::post('addpresidentPost', [WebManageController::class, 'addpresidentPost'])->name('addpresidentPost');
    Route::get('viewPresident', [WebManageController::class, 'viewPresident'])->name('viewPresident');
    Route::get('president/delete/{id}', [WebManageController::class, 'deletepresident'])->name('president.delete');

    // Joining Application
    Route::get('/joining-application', [JoiningController::class, 'viewJoinApplication'])->name('viewJoinApplication');
    Route::get('/application', [JoiningController::class, 'Application'])->name('Application');
    Route::post('/change-status-application', [JoiningController::class, 'ChangeStatusApplication'])->name('ChangeStatusApplication');
    Route::get('/joining-application/delete/{id}', [JoiningController::class, 'deleteJoinApplication'])->name('delete.JoinApplication');

    // promo code 
    Route::get('/Promo-code', [JoiningController::class, 'viewPromocode'])->name('viewPromocode');
    Route::post('/promo-codes', [JoiningController::class, 'addPromocode'])->name('addPromocode');
    Route::delete('/promo-codes/{id}', [JoiningController::class, 'destroy'])->name('promo-codes.destroy');

    // generate certificate  
    Route::get('/generate-certificate/{id}', [CertificateController::class, 'generateCertificate'])->name('generate.certificate');
    Route::get('/generate-letter/{id}', [CertificateController::class, 'generateletter'])->name('generate.letter');
    Route::get('/generate-idcard/{id}', [CertificateController::class, 'generateidcard'])->name('generate.idcard');
    Route::get('/generate-officerIdcard/{id}', [CertificateController::class, 'officerIdcard'])->name('generate.officerIdcard');


    // Complain Application
    Route::get('/complain-list', [ComplainController::class, 'viewComplainApplictaion'])->name('viewComplainApplictaion');
    Route::get('/complain-status', [ComplainController::class, 'ComplainApplictaionStatus'])->name('ComplainApplictaionStatus');
    Route::post('changeStatus', [ComplainController::class, 'changeStatus'])->name('changeStatus');
    Route::get('complain/delete/{id}', [ComplainController::class, 'deleteCompApplictaion'])->name('delete.deleteCompApplictaion');

    // Notification //
    Route::get('/official-notification', [AdminController::class, 'notificationList'])->name('officialNotification');
    Route::post('/official-notification', [AdminController::class, 'OfficialNotificationPost'])->name('OfficialNotificationPost');
    Route::get('/notification-list', [AdminController::class, 'notificationList'])->name('notificationList');
    Route::get('/official-notification/delete/{id}', [AdminController::class, 'delete'])->name('notification.delete');
    Route::get('/view/official-notification', [AdminController::class, 'notificationListview'])->name('officialNotificationview');

    // Whats New
    Route::get('addWhatsNew', [WhatsNewController::class, 'addWhatsNew'])->name('addWhatsNew');
    Route::post('postWhatsNew', [WhatsNewController::class, 'postWhatsNew'])->name('postWhatsNew');
    Route::get('viewWhatsNew', [WhatsNewController::class, 'viewWhatsNew'])->name('viewWhatsNew');
    Route::get('WhatsNew/delete/{id}', [WhatsNewController::class, 'deleteWhatsNew'])->name('delete.WhatsNew');

    // Latest Update
    Route::get('addLatestUpdate', [LatestUpdateController::class, 'addLatestUpdate'])->name('addLatestUpdate');

    // Route::get('addLatestUpdate', [LatestUpdateController::class, 'addLatestUpdate'])->name('addLatestUpdate');
    Route::post('postLatestUpdate', [LatestUpdateController::class, 'postLatestUpdate'])->name('postLatestUpdate');
    Route::get('viewLatestUpdate', [LatestUpdateController::class, 'viewLatestUpdate'])->name('viewLatestUpdate');
    Route::get('LatestUpdate/delete/{id}', [LatestUpdateController::class, 'deleteLatestUpdate'])->name('delete.LatestUpdate');

    //Publication //
    Route::get('view-publication', [PublicationController::class, 'viewPublication'])->name('viewPublication');
    Route::get('add-new-publication', [PublicationController::class, 'addPublication'])->name('addPublication');
    Route::post('add-new-publication-post', [PublicationController::class, 'addPublicationPost'])->name('addPublicationPost');
    Route::get('/publication/delete/{id}', [PublicationController::class, 'publicationDelete'])->name('publication.delete');

    Route::get('/add-monthly-report', [MonthlyReport::class, 'addMonthlyReport'])->name('addMonthlyReport');
    Route::post('/post-monthly-report', [MonthlyReport::class, 'postMonthlyReport'])->name('postMonthlyReport');
    Route::get('/view-monthly-report', [MonthlyReport::class, 'viewMonthlyReport'])->name('viewMonthlyReport');
    Route::get('/monthly-report/delete/{id}', [MonthlyReport::class, 'deleteMonthlyReport'])->name('MonthlyReport.delete');

    Route::get('/add-annual-report', [AnnualReportController::class, 'addAnnualReport'])->name('addAnnualReport');
    Route::post('/post-annual-report', [AnnualReportController::class, 'postAnnualReport'])->name('postAnnualReport');
    Route::get('/view-annual-report', [AnnualReportController::class, 'viewAnnualReport'])->name('viewAnnualReport');
    Route::get('/annual-report/delete/{id}', [AnnualReportController::class, 'deleteAnnualReport'])->name('AnnualReport.delete');

    Route::get('/add-souvenier', [SouvenierController::class, 'addSouvenier'])->name('addSouvenier');
    Route::post('/post-souvenier', [SouvenierController::class, 'postSouvenier'])->name('postSouvenier');
    Route::get('/view-souvenier', [SouvenierController::class, 'viewSouvenier'])->name('viewSouvenier');
    Route::get('/souvenier/delete/{id}', [SouvenierController::class, 'deleteSouvenier'])->name('Souvenier.delete');

    Route::get('/add-prospectus', [ProspectusController::class, 'addProspectus'])->name('addProspectus');
    Route::post('/post-prospectus', [ProspectusController::class, 'postProspectus'])->name('postProspectus');
    Route::get('/view-prospectus', [ProspectusController::class, 'viewProspectus'])->name('viewProspectus');
    Route::get('/prospectus/delete/{id}', [ProspectusController::class, 'deleteProspectus'])->name('Prospectus.delete');

    Route::get('/add-journal', [JournalController::class, 'addJournal'])->name('addJournal');
    Route::post('/post-journal', [JournalController::class, 'postJournal'])->name('postJournal');
    Route::get('/view-journal', [JournalController::class, 'viewJournal'])->name('viewJournal');
    Route::get('/journal/delete/{id}', [JournalController::class, 'deleteJournal'])->name('Journal.delete');

    Route::get('/add-rulebook', [RulebookController::class, 'addRulebook'])->name('addRulebook');
    Route::post('/post-rulebook', [RulebookController::class, 'postRulebook'])->name('postRulebook');
    Route::get('/view-rulebook', [RulebookController::class, 'viewRulebook'])->name('viewRulebook');
    Route::get('/rulebook/delete/{id}', [RulebookController::class, 'deleteRulebook'])->name('delete.Rulebook');

    Route::get('/add-convocation', [ConvocationController::class, 'addConvocation'])->name('addConvocation');
    Route::post('/post-convocation', [ConvocationController::class, 'postConvocation'])->name('postConvocation');
    Route::get('/view-convocation', [ConvocationController::class, 'viewConvocation'])->name('viewConvocation');
    Route::get('/convocation/delete/{id}', [ConvocationController::class, 'deleteConvocation'])->name('delete.Convocation');


    //Administration //

    //    National Patron
    Route::get('add-national-patron-advisor', [NationalPatronController::class, 'addNationalPatron'])->name('addNationalPatron');
    Route::post('add-national-patron', [NationalPatronController::class, 'addNationalPatronPost'])->name('addNationalPatronPost');
    Route::get('view-national-patron', [NationalPatronController::class, 'viewNationalPatron'])->name('viewNationalPatron');
    Route::get('national-patron/delete/{id}', [NationalPatronController::class, 'deleteNationalPatron'])->name('delete.NationalPatron');

    //    National Executive
    Route::get('add-national-executive', [NationalExecutiveController::class, 'addNationalExecutive'])->name('addNationalExecutive');
    Route::post('post-national-executive', [NationalExecutiveController::class, 'NationalExecutivePost'])->name('NationalExecutivePost');
    Route::get('view-national-executive', [NationalExecutiveController::class, 'viewNationalExecutive'])->name('viewNationalExecutive');
    Route::get('national-executive/delete/{id}', [NationalExecutiveController::class, 'deleteNationalExecutive'])->name('delete.NationalExecutive');

    // State president 
    Route::get('add-state-president', [StatePresidentController::class, 'addStatePresident'])->name('addStatePresident');
    Route::post('post-state-president', [StatePresidentController::class, 'StatePresidentPost'])->name('StatePresidentPost');
    Route::get('view-state-president', [StatePresidentController::class, 'viewStatePresident'])->name('viewStatePresident');
    Route::get('state-president/delete/{id}', [StatePresidentController::class, 'deleteStatePresident'])->name('delete.StatePresident');

    // Office Staff
    Route::get('add-office-staff', [OfficestaffController::class, 'addOfficestaff'])->name('addOfficestaff');
    Route::post('post-office-staff', [OfficestaffController::class, 'OfficeStaffPost'])->name('OfficeStaffPost');
    Route::get('view-office-staff', [OfficestaffController::class, 'viewOfficestaff'])->name('viewOfficestaff');
    Route::get('office-staff/delete/{id}', [OfficestaffController::class, 'deleteofficestaff'])->name('delete.officestaff');

    // Gallery //

    // Acknowledgement
    Route::get('/add-acknowledgement', [AcknowledgementController::class, 'addAcknowledgement'])->name('addAcknowledgement');
    Route::post('/post-acknowledgement', [AcknowledgementController::class, 'postAcknowledgement'])->name('postAcknowledgement');
    Route::get('/view-acknowledgement', [AcknowledgementController::class, 'viewAcknowledgement'])->name('viewAcknowledgement');
    Route::get('/acknowledgement/delete/{id}', [AcknowledgementController::class, 'deleteAcknowledgement'])->name('delete.Acknowledgement');

    // Govt Letters
    Route::get('add-govt-letters', [GovtlettersController::class, 'addGovtLetter'])->name('addGovtLetter');
    Route::post('post-govt-letters', [GovtlettersController::class, 'postGovtLetr'])->name('postGovtLetr');
    Route::get('view-govt-letters', [GovtlettersController::class, 'viewGovtLetter'])->name('viewGovtLetter');
    Route::get('govt-letters/delete/{id}', [GovtlettersController::class, 'deleteGovtLetter'])->name('delete.GovtLetter');

    Route::get('add-actn-taken-by-dept', [GovtlettersController::class, 'addActionTaken'])->name('addActionTaken');
    Route::post('post-actn-taken-by-dept', [GovtlettersController::class, 'postActnTknByDep'])->name('postActnTknByDep');
    Route::get('view-actn-taken-by-dep', [GovtlettersController::class, 'viewActnTknByDept'])->name('viewActnTknByDept');
    Route::get('actn-tkn-by-dept/delete/{id}', [GovtlettersController::class, 'deleteActnfile'])->name('actionfile.delete');

    //  Print Media
    Route::get('add-print-media', [PrintMediaController::class, 'addPrintMedia'])->name('addPrintMedia');
    Route::post('post-print-media', [PrintMediaController::class, 'postPrintMedia'])->name('postPrintMedia');
    Route::get('view-print-media', [PrintMediaController::class, 'viewPrintMedia'])->name('viewPrintMedia');
    Route::get('print-media/delete/{id}', [PrintMediaController::class, 'deletePrintMedia'])->name('delete.PrintMedia');

    // Photo
    Route::get('add-photo', [PhotoController::class, 'addPhoto'])->name('addPhoto');
    Route::post('post-add-photo', [PhotoController::class, 'postPhoto'])->name('postPhoto');
    Route::get('view-photo', [PhotoController::class, 'viewPhoto'])->name('viewPhoto');
    Route::get('photo/delete/{id}', [PhotoController::class, 'deletePhoto'])->name('delete.Photo');

    // Officer Interaction
    Route::get('add-officer-interaction', [OfficerInteractionController::class, 'addOfficerInteraction'])->name('addOfficerInteraction');
    Route::post('post-officer-interaction', [OfficerInteractionController::class, 'postOfficerInteraction'])->name('postOfficerInteraction');
    Route::get('view-officer-interaction', [OfficerInteractionController::class, 'viewOfficerInteraction'])->name('viewOfficerInteraction');
    Route::get('officer-interaction/delete/{id}', [OfficerInteractionController::class, 'deleteOfficerInteraction'])->name('delete.OfficerInteraction');

    // Action Taken Report
    Route::get('add-action-taken-report', [ActionTakRepoController::class, 'addActnTknRprt'])->name('addActnTknRprt');
    Route::post('post-action-taken-report', [ActionTakRepoController::class, 'postActnTknRprt'])->name('postActnTknRprt');
    Route::get('view-action-taken-report', [ActionTakRepoController::class, 'viewActnTknRprt'])->name('viewActnTknRprt');
    Route::get('delete-action-taken-report/delete/{id}', [ActionTakRepoController::class, 'deleteActnTknRprt'])->name('delete.ActionTakReport');

    // Electronic Media
    Route::get('add-electronic-media', [ElectronicMediaController::class, 'addElectronicMedia'])->name('addElectronicMedia');
    Route::post('post-electronic-media', [ElectronicMediaController::class, 'postElectronicMedia'])->name('postElectronicMedia');
    Route::get('view-electronic-media', [ElectronicMediaController::class, 'viewElectronicMedia'])->name('viewElectronicMedia');
    Route::get('electronic-media/delete/{id}', [ElectronicMediaController::class, 'deleteElectronicMedia'])->name('delete.Elecmedia');

    // Web Media
    Route::get('add-web-media', [WebMediaController::class, 'addWebMedia'])->name('addWebMedia');
    Route::post('post-web-media', [WebMediaController::class, 'postWebMedia'])->name('postWebMedia');
    Route::get('view-web-media', [WebMediaController::class, 'viewWebMedia'])->name('viewWebMedia');
    Route::get('web-media/delete/{id}', [WebMediaController::class, 'deletewebmedia'])->name('delete.WebMedia');

    //    Police Letter
    Route::get('add-police-letter', [PoliceLetterController::class, 'addPoliceLetter'])->name('addPoliceLetter');
    Route::post('post-police-letter', [PoliceLetterController::class, 'postPoliceLetter'])->name('postPoliceLetter');
    Route::get('view-police-letter', [PoliceLetterController::class, 'viewPoliceLetter'])->name('viewPoliceLetter');
    Route::get('police-letter/letter/delete/{id}', [PoliceLetterController::class, 'deletePoliceLetter'])->name('delete.PoliceLetter');

    // Video Gallery
    Route::get('add-video-gallery', [VideoGalleryController::class, 'addVideoGallery'])->name('addVideoGallery');
    Route::post('post-video-gallery', [VideoGalleryController::class, 'postVideoGallery'])->name('postVideoGallery');
    Route::get('view-video-gallery', [VideoGalleryController::class, 'viewVideoGallery'])->name('viewVideoGallery');
    Route::get('video-gallery/delete/{id}', [VideoGalleryController::class, 'deleteVideo'])->name('delete.video');

    // Our Awardee
    Route::get('add-our-awardee', [OurAwardeeController::class, 'addOurAwardee'])->name('addOurAwardee');
    Route::post('add-our-awardee', [OurAwardeeController::class, 'postOurAwardee'])->name('postOurAwardee');
    Route::get('view-our-awardee', [OurAwardeeController::class, 'viewOurAwardee'])->name('viewOurAwardee');
    Route::get('our-awardee/delete/{id}', [OurAwardeeController::class, 'deleteAward'])->name('delete.Award');

    // Activities //

    //Awards
    Route::get('add-Awards', [AwardsController::class, 'addAwards'])->name('addAwards');
    Route::post('post-Awards', [AwardsController::class, 'postAwards'])->name('postAwards');
    Route::get('view-Awards', [AwardsController::class, 'viewAwards'])->name('viewAwards');
    Route::get('Awards/delete/{id}', [AwardsController::class, 'deleteAwards'])->name('delete.Awards');

    // seminar
    Route::get('add-seminar', [SeminarController::class, 'addSeminar'])->name('addSeminar');
    Route::post('post-seminar', [SeminarController::class, 'postSeminar'])->name('postSeminar');
    Route::get('view-seminar', [SeminarController::class, 'viewSeminar'])->name('viewSeminar');
    Route::get('seminar/delete/{id}', [SeminarController::class, 'deleteSeminar'])->name('delete.Seminar');

    // Workshop
    Route::get('add-workshop', [WorkshopController::class, 'addWorkshop'])->name('addWorkshop');
    Route::post('post-workshop', [WorkshopController::class, 'postWorkshop'])->name('postWorkshop');
    Route::get('view-workshop', [WorkshopController::class, 'viewWorkshop'])->name('viewWorkshop');
    Route::get('view-workshop/delete/{id}', [WorkshopController::class, 'deleteWorkshop'])->name('delete.workshop');

    // Stand with Nation
    Route::get('add-stand-with-nation', [StandwithNationController::class, 'addStandwithNation'])->name('addStandwithNation');
    Route::post('post-stand-with-nation', [StandwithNationController::class, 'postStandwithNation'])->name('postStandwithNation');
    Route::get('view-stand-with-nation', [StandwithNationController::class, 'viewStandwithNation'])->name('viewStandwithNation');
    Route::get('stand-with-nation/delete/{id}', [StandwithNationController::class, 'deleteStandwithNation'])->name('delete.standwithnation');

    // Rural Awreness
    Route::get('add-rural-awareness', [RuralAwarenessController::class, 'addRuralAwareness'])->name('addRuralAwareness');
    Route::post('post-rural-awareness', [RuralAwarenessController::class, 'postRuralAwareness'])->name('postRuralAwareness');
    Route::get('view-rural-awareness', [RuralAwarenessController::class, 'viewRuralAwareness'])->name('viewRuralAwareness');
    Route::get('rural-awareness/delete/{id}', [RuralAwarenessController::class, 'deleteRuralAwareness'])->name('delete.RuralAwareness');

    // Educational Awareness
    Route::get('add-educational-awareness', [EducationalAwarenessController::class, 'addEducationalAwareness'])->name('addEducationalAwareness');
    Route::post('post-educational-awareness', [EducationalAwarenessController::class, 'postEducationalAwareness'])->name('postEducationalAwareness');
    Route::get('view-educational-awareness', [EducationalAwarenessController::class, 'viewEducationalAwareness'])->name('viewEducationalAwareness');
    Route::get('educational-awareness/delete/{id}', [EducationalAwarenessController::class, 'deleteEducationalAwareness'])->name('delete.EduAwareness');

    // covid19
    Route::get('add-covid-19', [Covid19controller::class, 'addCovid19'])->name('addCovid19');
    Route::post('post-covid-19', [Covid19controller::class, 'postCovid19'])->name('postCovid19');
    Route::get('view-covid-19', [Covid19controller::class, 'viewCovid19'])->name('viewCovid19');
    Route::get('covid-19/delete/{id}', [Covid19controller::class, 'deleteCovid19'])->name('delete.Covid19');

    // Social Work
    Route::get('add-social-work', [SocialWorkController::class, 'addSocialWork'])->name('addSocialWork');
    Route::post('post-social-work', [SocialWorkController::class, 'postSocialWork'])->name('postSocialWork');
    Route::get('view-social-work', [SocialWorkController::class, 'viewSocialWork'])->name('viewSocialWork');
    Route::get('social-work/delete/{id}', [SocialWorkController::class, 'deleteSocialWork'])->name('delete.SocialWork');

    // Our Team //

    // National Team
    Route::get('add-national-team', [NationalTeamController::class, 'addNationalTeam'])->name('addNationalTeam');
    Route::post('post-national-team', [NationalTeamController::class, 'postNationalTeam'])->name('postNationalTeam');
    Route::get('view-national-team', [NationalTeamController::class, 'viewNationalTeam'])->name('viewNationalTeam');
    Route::get('national-team/delete/{id}', [NationalTeamController::class, 'deleteNationalTeam'])->name('delete.NationalTeam');

    // Zone Team
    Route::get('add-zone-team', [ZoneTeamController::class, 'addZoneTeam'])->name('addZoneTeam');
    Route::post('post-zone-team', [ZoneTeamController::class, 'postZoneTeam'])->name('postZoneTeam');
    Route::get('view-zone-team', [ZoneTeamController::class, 'viewZoneTeam'])->name('viewZoneTeam');
    Route::get('zone-team/delete/{id}', [ZoneTeamController::class, 'deleteZoneTeam'])->name('delete.ZoneTeam');

    // State Team
    Route::get('add-state-team', [StateTeamController::class, 'addStateTeam'])->name('addStateTeam');
    Route::post('post-state-team', [StateTeamController::class, 'postStateTeam'])->name('postStateTeam');
    Route::get('view-state-team', [StateTeamController::class, 'viewStateTeam'])->name('viewStateTeam');
    Route::get('state-team/delete/{id}', [StateTeamController::class, 'deleteStateTeam'])->name('delete.StateTeam');

    // Division Team 
    Route::get('add-division-team', [DivisionTeamController::class, 'addDivisionTeam'])->name('addDivisionTeam');
    Route::post('post-division-team', [DivisionTeamController::class, 'postDivisionTeam'])->name('postDivisionTeam');
    Route::get('view-division-team', [DivisionTeamController::class, 'viewDivisionTeam'])->name('viewDivisionTeam');
    Route::get('division-team/delete/{id}', [DivisionTeamController::class, 'deleteDivisionTeam'])->name('delete.DivisionTeam');

    // District Team
    Route::get('add-district-team', [DistrictTeamController::class, 'addDistrictTeam'])->name('addDistrictTeam');
    Route::post('post-district-team', [DistrictTeamController::class, 'postDistrictTeam'])->name('postDistrictTeam');
    Route::get('view-district-team', [DistrictTeamController::class, 'viewDistrictTeam'])->name('viewDistrictTeam');
    Route::get('district-team/delete/{id}', [DistrictTeamController::class, 'deleteDistrictTeam'])->name('delete.DistrictTeam');

    // Block Team

    Route::get('add-block-team', [BlockTeamController::class, 'addBlockTeam'])->name('addBlockTeam');
    Route::post('post-block-team', [BlockTeamController::class, 'postBlockTeam'])->name('postBlockTeam');
    Route::get('view-block-team', [BlockTeamController::class, 'viewBlockTeam'])->name('viewBlockTeam');
    Route::get('block-team/delete/{id}', [BlockTeamController::class, 'deleteBlockTeam'])->name('delete.BlockTeam');

    // Active Team
    Route::get('add-active-team', [ActiveMemberController::class, 'addActiveTeam'])->name('addActiveTeam');
    Route::post('post-active-team', [ActiveMemberController::class, 'postActiveTeam'])->name('postActiveTeam');
    Route::get('view-active-team', [ActiveMemberController::class, 'viewActiveTeam'])->name('viewActiveTeam');
    Route::get('active-team/delete/{id}', [ActiveMemberController::class, 'deleteActiveTeam'])->name('delete.ActiveTeam');

    // Volunteer

    Route::get('volunteer', [VolunteerController::class, 'addVolunteer'])->name('addVolunteer');
    Route::post('post-volunteer', [VolunteerController::class, 'postVolunteer'])->name('postVolunteer');
    Route::get('view-volunteer', [VolunteerController::class, 'viewVolunteer'])->name('viewVolunteer');
    Route::get('volunteer/delete/{id}', [VolunteerController::class, 'deleteVolunteer'])->name('delete.Volunteer');

    // Intern
    Route::get('add-intern', [InternController::class, 'addIntern'])->name('addIntern');
    Route::post('post-intern', [InternController::class, 'postIntern'])->name('postIntern');
    Route::get('view-intern', [InternController::class, 'viewIntern'])->name('viewIntern');
    Route::get('intern/delete/{id}', [InternController::class, 'deleteIntern'])->name('delete.Intern');

    // Our Cell/Unit

    // Legal Cell
    Route::get('add-legal-cell', [LegalCellController::class, 'addLegalCell'])->name('addLegalCell');
    Route::post('post-legal-cell', [LegalCellController::class, 'postLegalCell'])->name('postLegalCell');
    Route::get('view-legal-cell', [LegalCellController::class, 'viewLegalCell'])->name('viewLegalCell');
    Route::get('legal-cell/delete/{id}', [LegalCellController::class, 'deleteLegalCell'])->name('delete.LegalCell');

    // Educational Cell
    Route::get('add-educational-cell', [EducationalCellController::class, 'addEducationalCell'])->name('addEducationalCell');
    Route::post('post-educational-cell', [EducationalCellController::class, 'postEducationalCell'])->name('postEducationalCell');
    Route::get('view-educational-cell', [EducationalCellController::class, 'viewEducationalCell'])->name('viewEducationalCell');
    Route::get('educational-cell/delete/{id}', [EducationalCellController::class, 'deleteEducationalCell'])->name('delete.EducationalCell');

    // Doctor Cell
    Route::get('add-doctor-cell', [DoctorCellController::class, 'addDoctorCell'])->name('addDoctorCell');
    Route::post('post-doctor-cell', [DoctorCellController::class, 'postDoctorCell'])->name('postDoctorCell');
    Route::get('view-doctor-cell', [DoctorCellController::class, 'viewDoctorCell'])->name('viewDoctorCell');
    Route::get('doctor-cell/delete/{id}', [DoctorCellController::class, 'deleteDoctorCell'])->name('delete.DoctorCell');

    // Child Right Protection Cell
    Route::get('add-child-right-protection-cell', [ChildRightCellController::class, 'addChildRightCell'])->name('addChildRightCell');
    Route::post('post-child-right-protection-cell', [ChildRightCellController::class, 'postChildRightCell'])->name('postChildRightCell');
    Route::get('view-child-right-protection-cell', [ChildRightCellController::class, 'viewChildRightCell'])->name('viewChildRightCell');
    Route::get('child-right-protection-cell/delete/{id}', [ChildRightCellController::class, 'deleteChildRightCell'])->name('delete.ChildRightCell');

    // RTI Cell
    Route::get('add-rti-cell', [RtiCellController::class, 'addRtiCell'])->name('addRtiCell');
    Route::post('post-rti-cell', [RtiCellController::class, 'postRtiCell'])->name('postRtiCell');
    Route::get('view-rti-cell', [RtiCellController::class, 'viewRtiCell'])->name('viewRtiCell');
    Route::get('rti-cell/delete/{id}', [RtiCellController::class, 'deleteRtiCell'])->name('delete.RtiCell');

    // Media Cell
    Route::get('add-media-cell', [MediaCellController::class, 'addMediaCell'])->name('addMediaCell');
    Route::post('post-media-cell', [MediaCellController::class, 'postMediaCell'])->name('postMediaCell');
    Route::get('view-media-cell', [MediaCellController::class, 'viewMediaCell'])->name('viewMediaCell');
    Route::get('media-cell/delete/{id}', [MediaCellController::class, 'deleteMediaCell'])->name('delete.MediaCell');

    // Tribal Right Protection Cell
    Route::get('add-tribal-right-protection-cell', [TribalRightController::class, 'addTRProtection'])->name('addTRProtection');
    Route::post('post-tribal-right-protection-cell', [TribalRightController::class, 'postTRProtection'])->name('postTRProtection');
    Route::get('view-tribal-right-protection-cell', [TribalRightController::class, 'viewTRProtection'])->name('viewTRProtection');
    Route::get('tribal-right-protection-cell/delete/{id}', [TribalRightController::class, 'deleteTRProtection'])->name('delete.TRProtection');

    // Crime Control Unit
    Route::get('add-crime-control-unit', [CrimeControlController::class, 'addCrimeControl'])->name('addCrimeControl');
    Route::post('post-crime-control-unit', [CrimeControlController::class, 'postCrimeControl'])->name('postCrimeControl');
    Route::get('view-crime-control-unit', [CrimeControlController::class, 'viewCrimeControl'])->name('viewCrimeControl');
    Route::get('crime-control-unit/delete/{id}', [CrimeControlController::class, 'deleteCrimeControl'])->name('delete.CrimeControl');

    // Anti Corruption Unit
    Route::get('add-anti-corruption-unit', [AntiCorruptionController::class, 'addAntiCorruption'])->name('addAntiCorruption');
    Route::post('post-anti-corruption-unit', [AntiCorruptionController::class, 'postAntiCorruption'])->name('postAntiCorruption');
    Route::get('view-anti-corruption-unit', [AntiCorruptionController::class, 'viewAntiCorruption'])->name('viewAntiCorruption');
    Route::get('anti-corruption-unit/delete/{id}', [AntiCorruptionController::class, 'deleteAntiCorruption'])->name('delete.AntiCorruption');

    // Anti Human Traffing
    Route::get('add-anti-human-trfc-cell', [AntHumanTrfController::class, 'addAntHmnTrf'])->name('addAntHmnTrf');
    Route::post('post-anti-human-trfc-cell', [AntHumanTrfController::class, 'postAntHmnTrf'])->name('postAntHmnTrf');
    Route::get('view-anti-human-trfc-cell', [AntHumanTrfController::class, 'viewAntHmnTrf'])->name('viewAntHmnTrf');
    Route::get('anti-human-trfc-cell/delete/{id}', [AntHumanTrfController::class, 'deleteAntHmnTrf'])->name('delete.AntHmnTrf');
});
