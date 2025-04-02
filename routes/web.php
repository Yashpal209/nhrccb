
<?php

// use App\Http\Controllers\Web\Home\HomeController as HomeHomeController;

use App\Http\Controllers\InternshipController ;
use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\Pages\ActivityController;
use App\Http\Controllers\Web\Pages\AwardController;
use App\Http\Controllers\Web\Pages\CellUnitController;
use App\Http\Controllers\Web\Pages\ComplainController;
use App\Http\Controllers\Web\Pages\EventController;
use App\Http\Controllers\Web\Pages\GalleryController;
use App\Http\Controllers\Web\Pages\IssueController;
use App\Http\Controllers\Web\Pages\JoinUsController;
use App\Http\Controllers\Web\Pages\OurTeamController;
use App\Http\Controllers\Web\Pages\PageController;
use App\Http\Controllers\Web\Pages\PublicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController ;

Route::post('/payment/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
Route::post('/payment/failure', [PaymentController::class, 'paymentFailure'])->name('payment.failure');


Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/ind', [HomeController::class, 'ind'])->name('index3');

// Route::get('/', [HomeController::class, 'notification'])->name('notification');

// Home page
Route::get('/upcomingEvent', [PageController::class, 'upcomingEvent'])->name('upcomingEvent');
Route::get('/latestUpdate', [PageController::class, 'latestUpdate'])->name('latestUpdate');
Route::get('/whatsNew', [PageController::class, 'whatsNew'])->name('whatsNew');

// About Us
Route::get('/who-we-are', [PageController::class,'who_we_are'])->name('who_we_are');
Route::get('/Mission-Vision', [PageController::class,'what_we_do'])->name('what_we_do');
Route::get('/how-we-works', [PageController::class,'how_we_works'])->name('how_we_works');
Route::get('/rules-and-regulations', [PageController::class,'rules_regulations'])->name('rules_regulations');
Route::get('/govt-recognition', [PageController::class,'govt_recognition'])->name('govt_recognition');
Route::get('/collaboration', [PageController::class,'collaboration'])->name('collaboration');
Route::get('functions', [PageController::class, 'functions'])->name('functions');
Route::get('official_notification', [PageController::class, 'official_notification'])->name('official_notification');
Route::get('funding', [PageController::class, 'funding'])->name('funding');
Route::get('publication', [PageController::class, 'publication'])->name('publication');
Route::get('whos-who', [PageController::class, 'whos_who'])->name('whos_who');

// Publication
Route::get('monthly-report', [PublicationController::class, 'monthly_report'])->name('monthly_report');
Route::get('annual-report', [PublicationController::class, 'annual_report'])->name('annual_report');
Route::get('souvenier', [PublicationController::class, 'souvenier'])->name('souvenier');
Route::get('propectus', [PublicationController::class, 'propectus'])->name('propectus');
Route::get('journal', [PublicationController::class, 'journal'])->name('journal');
Route::get('rule-book', [PublicationController::class, 'rule_book'])->name('rule_book');
Route::get('convocation-report', [PublicationController::class, 'convo_report'])->name('convo_report');
Route::get('book', [PublicationController::class, 'book'])->name('book');

// Administration
Route::get('president_message', [PageController::class, 'PresidentMessage'])->name('PresidentMessage');
Route::get('national_patron', [PageController::class, 'NationalPatron'])->name('NationalPatron');
Route::get('national_Profile', [PageController::class, 'NationalProfile'])->name('NationalProfile');
Route::get('national_advisor', [PageController::class, 'NationalAdvisor'])->name('NationalAdvisor');
Route::get('office_staff', [PageController::class, 'OfficeStaff'])->name('OfficeStaff');

// Gallery
Route::get('govt-letters', [GalleryController::class, 'GovtLetter'])->name('GovtLetter');
Route::get('action-taken-by-department', [GalleryController::class, 'viewActnTknByDepts'])->name('viewActnTknByDepts');
Route::get('print-media', [GalleryController::class, 'PrintMedia'])->name('PrintMedia');
Route::get('photos', [GalleryController::class, 'Photos'])->name('Photos');
Route::get('officer_intercation', [GalleryController::class, 'OfficerInteraction'])->name('OfficerInteraction');
Route::get('action_taken_report', [GalleryController::class, 'ActionTakRepo'])->name('ActionTakRepo');
Route::get('electronic_media', [GalleryController::class, 'ElecMedia'])->name('ElecMedia');
Route::get('web_media', [GalleryController::class, 'WebMedia'])->name('WebMedia');
Route::get('press_release', [GalleryController::class, 'PressRelease'])->name('PressRelease');
Route::get('police_letter', [GalleryController::class, 'PoliceLetter'])->name('PoliceLetter');
Route::get('video_gallery', [GalleryController::class, 'VideoGallery'])->name('VideoGallery');
Route::get('acknowledgement', [GalleryController::class, 'acknowledgement'])->name('acknowledgement');
Route::get('interview', [GalleryController::class, 'interview'])->name('interview');

// Event
Route::get('international_event', [EventController::class, 'international_event'])->name('international_event');
Route::get('national_event', [EventController::class, 'national_event'])->name('national_event');
Route::get('state_event', [EventController::class, 'state_event'])->name('state_event');
Route::get('award_ceremony', [EventController::class, 'award_ceremony'])->name('award_ceremony');
Route::get('special_event', [EventController::class, 'special_event'])->name('special_event');
Route::get('awareness_programme', [EventController::class, 'awareness_programme'])->name('awareness_programme');

// Awards
Route::get('district-level', [AwardController::class, 'district_level'])->name('district_level');
Route::get('community-level', [AwardController::class, 'community_level'])->name('community_level');

Route::get('nelson-mandela-human-rights', [AwardController::class, 'nelsonmandelahumanrights'])->name('nelsonmandelahumanrights');
Route::get('nhra', [AwardController::class, 'nhra'])->name('nhra');
Route::get('nhra', [AwardController::class, 'nhra'])->name('nhra');

// awardee
Route::get('our_awardee', [PageController::class, 'OurAwardee'])->name('OurAwardee');

// Join Us
Route::get('join_us', [JoinUsController::class, 'JoinUs'])->name('JoinUs');
Route::post('post_join_us_form', [JoinUsController::class, 'postJoinUsForm'])->name('postJoinUsForm');
Route::get('thank_you', [JoinUsController::class, 'thankYou'])->name('thankYou');
Route::get('training-research', [PageController::class, 'trainingResearch'])->name('trainingResearch');



// Join Us
Route::get('/state/data', [PageController::class, 'stateData'])->name('state.data');
Route::get('/division/data', [PageController::class, 'divisionData'])->name('division.data');
Route::get('/district/data', [PageController::class, 'districtData'])->name('district.data');
Route::get('/training-research', [PageController::class, 'trainingResearch'])->name('trainingResearch');


// Verification
Route::get('verification', [PageController::class, 'verification'])->name('verification');

Route::post('/verify', [PageController::class, 'verify'])->name('verify');

// Issue
Route::get('human-rights',[IssueController::class, 'HumanRights'])->name('HumanRights');
Route::get('women-rights',[IssueController::class, 'WomenRights'])->name('WomenRights');
Route::get('child-rights',[IssueController::class, 'ChildRights'])->name('ChildRights');
Route::get('consumer-rights',[IssueController::class, 'ConsumerRights'])->name('ConsumerRights');
Route::get('right-to-information', [IssueController::class, 'RTI'])->name('RTI');
Route::get('disability-rights', [IssueController::class, 'DisabilityRights'])->name('DisabilityRights');
Route::get('right-to-education', [IssueController::class, 'RightToEducation'])->name('RightToEducation');
Route::get('advocate-rights', [IssueController::class, 'AdvocateRights'])->name('AdvocateRights');
Route::get('lgbt-rights', [IssueController::class, 'LGBTRights'])->name('LGBTRights');
Route::get('doctor-rights', [IssueController::class, 'DoctorRights'])->name('DoctorRights');
Route::get('tribal-rights', [IssueController::class, 'TribalRights'])->name('TribalRights');
Route::get('press-rights', [IssueController::class, 'PressRights'])->name('PressRights');
Route::get('crime-control-act', [IssueController::class, 'CrimeControlAct'])->name('CrimeControlAct');

// Activities
Route::get('awards', [ActivityController::class, 'Awards'])->name('Awards');
Route::get('seminar', [ActivityController::class, 'Seminar'])->name('Seminar');
Route::get('workshop', [ActivityController::class, 'workshop'])->name('workshop');
Route::get('stand_with_nation', [ActivityController::class, 'standWithNation'])->name('standWithNation');
Route::get('rural_awareness', [ActivityController::class, 'RuralAwareness'])->name('RuralAwareness');
Route::get('educational_awareness', [ActivityController::class, 'EducationalAwareness'])->name('EducationalAwareness');
Route::get('covid_19', [ActivityController::class, 'Covid19'])->name('Covid19');
Route::get('social_work', [ActivityController::class, 'SocialWork'])->name('SocialWork');
Route::get('change_news', [ActivityController::class, 'ChangeNews'])->name('ChangeNews');

// Our Team
Route::get('national-team', [OurTeamController::class, 'NationalTeam'])->name('NationalTeam');
Route::get('state-team', [OurTeamController::class, 'StateTeam'])->name('StateTeam');
Route::get('division-team', [OurTeamController::class, 'DivisionTeam'])->name('DivisionTeam');
Route::get('district-team', [OurTeamController::class, 'DistrictTeam'])->name('DistrictTeam');
Route::get('block-team', [OurTeamController::class, 'BlockTeam'])->name('BlockTeam');
Route::get('zone-team', [OurTeamController::class, 'ZoneTeam'])->name('ZoneTeam');
Route::get('volunteer', [OurTeamController::class, 'volunteer'])->name('volunteer');
Route::get('interns', [OurTeamController::class, 'interns'])->name('interns');
Route::get('activemember', [OurTeamController::class, 'activemember'])->name('activemember');

// Cell Unit
Route::get('Rti-cell', [CellUnitController::class, 'RtiCell'])->name('RtiCell');
Route::get('legal-cell', [CellUnitController::class, 'LegalCell'])->name('LegalCell');
Route::get('educational-cell', [CellUnitController::class, 'EducationalCell'])->name('EducationalCell');
Route::get('doctor-cell', [CellUnitController::class, 'DoctorCell'])->name('DoctorCell');
Route::get('child-rights-protection-cell', [CellUnitController::class, 'ChildRightsProCell'])->name('ChildRightsProCell');
Route::get('media-cell', [CellUnitController::class, 'MediaCell'])->name('MediaCell');
Route::get('tribal-right-protection-cell', [CellUnitController::class, 'TRProCell'])->name('TRProCell');
Route::get('crime-control-unit', [CellUnitController::class, 'CrimeControlUnit'])->name('CrimeControlUnit');
Route::get('anti-corruption-cell', [CellUnitController::class, 'AntiCorruptionCell'])->name('AntiCorruptionCell');
Route::get('anti-human-trafficking-cell', [CellUnitController::class, 'AntiHumanTrfCell'])->name('AntiHumanTrfCell');

// Compalin

Route::get('new-complain', [ComplainController::class, 'newComplain'])->name('newComplain');
Route::post('post-new-complain', [ComplainController::class, 'postNewComplainForm'])->name('postNewComplainForm');
Route::get('complain-status', [ComplainController::class, 'ComplainStatus'])->name('ComplainStatus');
Route::get('complain-dashboard', [ComplainController::class, 'ComplainDashboard'])->name('ComplainDashboard');

// Contact Us
Route::get('contact_us', [PageController::class, 'ContactUs'])->name('ContactUs');
Route::get('donation', [PageController::class, 'donation'])->name('donation');

// internship Services
Route::get('internship-guideline', [InternshipController::class, 'internshipGuideline'])->name('internshipGuideline');
Route::get('short-term', [InternshipController::class, 'shortTerm'])->name('shortTerm');
Route::get('Winter', [InternshipController::class, 'winter'])->name('winter');
Route::get('Summer', [InternshipController::class, 'summer'])->name('summer');
Route::get('apply-internship', [InternshipController::class, 'apply'])->name('apply');
Route::post('applyforinternship', [InternshipController::class, 'applyinternship'])->name('applyinternship');

require base_path('routes/admin.php');