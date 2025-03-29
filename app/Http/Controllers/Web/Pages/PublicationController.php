<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publication\MonthlyReport;
use App\Models\Admin\Publication\AnnualReport;
use App\Models\Admin\Publication\Souvenier;
use App\Models\Admin\Publication\Journal;
use App\Models\Admin\Publication\Prospectus;
use App\Models\Admin\Publication\Rulebook;
use App\Models\Admin\Publication\Convocation;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class PublicationController extends Controller
{
     public function monthly_report()
     {
          $monthlyReports = MonthlyReport::paginate(10);
          return view('web.pages.publication.monthly_report', compact('monthlyReports'));
     }
     public function annual_report()
     {
          $annualReports = AnnualReport::paginate(10);
          return view('web.pages.publication.annual_report', compact('annualReports'));
     }
     public function souvenier()
     {
          $souveniers = Souvenier::paginate(10);
          return view('web.pages.publication.souvenier', compact('souveniers'));
     }
     public function propectus()
     {
          $propectus = Prospectus::paginate(10);
          return view('web.pages.publication.propectus', compact('propectus'));
     }
     public function journal()
     {
          $journals = Journal::paginate(10);
          return view('web.pages.publication.journal', compact('journals'));
     }
     public function rule_book()
     {
          $ruleBooks = Rulebook::paginate(10);
          return view('web.pages.publication.rule_book', compact('ruleBooks'));
     }
     public function convo_report()
     {
          $Convocation = Convocation::paginate(10);
          return view('web.pages.publication.convocation_report', compact('Convocation'));
     }
     public function book()
     {
          // $Convocation = Convocation::paginate(10);
          return view('web.pages.publication.book', );
     }
}
