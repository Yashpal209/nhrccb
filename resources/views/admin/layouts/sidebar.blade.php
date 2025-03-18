<div class="sb2-1">

    <!--== LEFT MENU ==-->
    <div class="sb2-13">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a href="#" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                        aria-hidden="true"></i>Joining</a>
                <div class="collapsible-body left-sub-menu">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Joining Application</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('viewJoinApplictaion') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Joining Application</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i>New
                    Complain</a>
                <div class="collapsible-body left-sub-menu">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="{{ route('viewComplainApplictaion') }}" class="collapsible-header"><i
                                    class="fa fa-eye" aria-hidden="true"></i>New Complain</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                        aria-hidden="true"></i>Notification</a>
                <div class="collapsible-body left-sub-menu">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Official Notification</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('officialNotification') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Official Notification</a>
                                    </li>
                                    <li><a href="{{ route('officialNotificationview') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Official Notification</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Whats New</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addWhatsNew') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Whats New</a>
                                    </li>
                                    <li><a href="{{ route('viewWhatsNew') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Whats New</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Latest Update</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addLatestUpdate') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Latest Update</a>
                                    </li>
                                    <li><a href="{{ route('viewLatestUpdate') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Latest Update</a>
                                    </li>

                                </ul>
                            </div>
                        </li>


                    </ul>
                </div>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>
                    Administration</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{ route('addNationalPatron') }}"><i class="fa fa-pencil"
                                    aria-hidden="true"></i>Add National Patron</a>
                        </li>
                        <li><a href="{{ route('viewNationalPatron') }}"><i class="fa fa-eye" aria-hidden="true"></i>View
                                National Patron</a>
                        </li>
                        <li><a href="{{ route('addNationalAdvisor') }}"><i class="fa fa-pencil"
                                    aria-hidden="true"></i>Add National Advisor</a>
                        </li>
                        <li><a href="{{ route('viewNationalAdvisor') }}"><i class="fa fa-eye"
                                    aria-hidden="true"></i>View National Advisor</a>
                        </li>
                        <li><a href="{{ route('addOfficestaff') }}"><i class="fa fa-pencil" aria-hidden="true"></i>Add
                                Office Staff</a>
                        </li>
                        <li><a href="{{ route('viewOfficestaff') }}"><i class="fa fa-eye" aria-hidden="true"></i>View
                                Office Staff</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                        aria-hidden="true"></i>Publication</a>
                <div class="collapsible-body left-sub-menu">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Monthly Report</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addMonthlyReport') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Monthly Report</a>
                                    </li>
                                    <li><a href="{{ route('viewMonthlyReport') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Monthly Report</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Annual Report</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addAnnualReport') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Annual Report</a>
                                    </li>
                                    <li><a href="{{ route('viewAnnualReport') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Annual Report</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Souvenier</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addSouvenier') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Annual Souvenier</a>
                                    </li>
                                    <li><a href="{{ route('viewSouvenier') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Souvenier</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Prospectus</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addProspectus') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Propectus</a>
                                    </li>
                                    <li><a href="{{ route('viewProspectus') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Prospectus</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Journal</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addJournal') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Journal</a>
                                    </li>
                                    <li><a href="{{ route('viewJournal') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Journal</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Rulebook</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addRulebook') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Rulebook</a>
                                    </li>
                                    <li><a href="{{ route('viewRulebook') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Rulebook</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Convocation Report</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addConvocation') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Convocation</a>
                                    </li>
                                    <li><a href="{{ route('viewConvocation') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Convocation</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-image"
                        aria-hidden="true"></i>Media</a>
                <div class="collapsible-body left-sub-menu">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Acknowledgement</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addAcknowledgement') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Acknowledgement</a>
                                    </li>
                                    <li><a href="{{ route('viewAcknowledgement') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Acknowledgement</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Govt. Letters</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addGovtLetter') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Govt. Letters</a>
                                    </li>
                                    <li><a href="{{ route('viewGovtLetter') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Govt. Letters</a>
                                    </li>
                                    <li><a href="{{ route('viewActnTknByDept') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Action Taken by Department</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Event Gallery</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addPhoto') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Event Gallery</a>
                                    </li>
                                    <li><a href="{{ route('viewPhoto') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Event Gallery</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Officer Interaction</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addOfficerInteraction') }}"><i class="fa fa-pencil" aria-hidden="true"></i>Add Officer Interaction</a>
                                    </li>
                                    <li><a href="{{ route('viewOfficerInteraction') }}"><i class="fa fa-eye" aria-hidden="true"></i>View Officer Interaction</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Action Taken Report</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addActnTknRprt') }}"><i class="fa fa-pencil" aria-hidden="true"></i>Add Action Taken Report</a>
                                    </li>
                                    <li><a href="{{ route('viewActnTknRprt') }}"><i class="fa fa-eye" aria-hidden="true"></i>View Action Taken Report</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Print Media</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addPrintMedia') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Print Media</a>
                                    </li>
                                    <li><a href="{{ route('viewPrintMedia') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Print Media</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Web Media</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addWebMedia') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Web Media</a>
                                    </li>
                                    <li><a href="{{ route('viewWebMedia') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Web Media</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Video Gallery</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addVideoGallery') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Video Gallery</a>
                                    </li>
                                    <li><a href="{{ route('viewVideoGallery') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Video Gallery</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Press Release</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addElectronicMedia') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Press Release</a>
                                    </li>
                                    <li><a href="{{ route('viewElectronicMedia') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Press Release</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i>Officer Interaction</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addOfficerInteraction') }}"><i class="fa fa-pencil" aria-hidden="true"></i>Add Officer Interaction</a>
                                    </li>
                                    <li><a href="{{ route('viewOfficerInteraction') }}"><i class="fa fa-eye" aria-hidden="true"></i>View Officer Interaction</a>
                                    </li>

                                </ul>
                            </div>
                        </li> -->

                        <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i>Action Taken Report</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addActnTknRprt') }}"><i class="fa fa-pencil" aria-hidden="true"></i>Add Action Taken Report</a>
                                    </li>
                                    <li><a href="{{ route('viewActnTknRprt') }}"><i class="fa fa-eye" aria-hidden="true"></i>View Action Taken Report</a>
                                    </li>

                                </ul>
                            </div>
                        </li> -->
                        <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i>Electronic Media</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addElectronicMedia') }}"><i class="fa fa-pencil" aria-hidden="true"></i>Add Electronic Media</a>
                                    </li>
                                    <li><a href="{{ route('viewElectronicMedia') }}"><i class="fa fa-eye" aria-hidden="true"></i>View Electronic Media</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                      
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i>Police Letter</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addPoliceLetter') }}"><i class="fa fa-pencil" aria-hidden="true"></i>Add Police Letter</a>
                                    </li>
                                    <li><a href="{{ route('viewPoliceLetter') }}"><i class="fa fa-eye" aria-hidden="true"></i>View Police Letter</a>
                                    </li>

                                </ul>
                            </div>
                        </li> -->

                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-image"
                        aria-hidden="true"></i>Activities</a>
                <div class="collapsible-body left-sub-menu">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Awards</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addAwards')}}"><i class="fa fa-pencil" aria-hidden="true"></i>Add
                                            Awards</a>
                                    </li>
                                    <li><a href="{{route('viewAwards')}}"><i class="fa fa-eye" aria-hidden="true"></i>View Awards</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Seminar</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addSeminar') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Seminar</a>
                                    </li>
                                    <li><a href="{{ route('viewSeminar') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Seminar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Workshop</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addWorkshop') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Workshop</a>
                                    </li>
                                    <li><a href="{{ route('viewWorkshop') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Workshop</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Stand with Nation</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addStandwithNation') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Stand with Nation</a>
                                    </li>
                                    <li><a href="{{ route('viewStandwithNation') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Stand with Nation</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Rural Awareness</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addRuralAwareness') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Rural Awareness</a>
                                    </li>
                                    <li><a href="{{ route('viewRuralAwareness') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Rural Awareness</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Educational Awareness</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addEducationalAwareness') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Educational Awareness</a>
                                    </li>
                                    <li><a href="{{ route('viewEducationalAwareness') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Educational Awareness</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Covid 19</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addCovid19') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Covid19</a>
                                    </li>
                                    <li><a href="{{ route('viewCovid19') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Covid19</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Social Work</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addSocialWork') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Social Work</a>
                                    </li>
                                    <li><a href="{{ route('viewSocialWork') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Social Work</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                        aria-hidden="true"></i> Awardee</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{ route('addOurAwardee') }}"><i class="fa fa-pencil"
                                    aria-hidden="true"></i>Add Awardee</a>
                        </li>
                        <li><a href="{{ route('viewOurAwardee') }}"><i class="fa fa-eye" aria-hidden="true"></i>View
                                all Awardee</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-image"
                        aria-hidden="true"></i>Our Team</a>
                <div class="collapsible-body left-sub-menu">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>National Team</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addNationalTeam') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add National Team</a>
                                    </li>
                                    <li><a href="{{ route('viewNationalTeam') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View National Team</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Zone Team</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addZoneTeam') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Zone Team</a>
                                    </li>
                                    <li><a href="{{ route('viewZoneTeam') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Zone Team</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>State Team</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addStateTeam') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add State Team</a>
                                    </li>
                                    <li><a href="{{ route('viewStateTeam') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View State Team</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Division Team</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addDivisionTeam') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Division Team</a>
                                    </li>
                                    <li><a href="{{ route('viewDivisionTeam') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Division Team</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>District Team</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addDistrictTeam') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add District Team</a>
                                    </li>
                                    <li><a href="{{ route('viewDistrictTeam') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View District Team</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Block Team</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addBlockTeam') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Block Team</a>
                                    </li>
                                    <li><a href="{{ route('viewBlockTeam') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Block Team</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Active Member</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addActiveTeam') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Active Member</a>
                                    </li>
                                    <li><a href="{{ route('viewActiveTeam') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Active Member</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Volunteer</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addVolunteer') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Volunteer</a>
                                    </li>
                                    <li><a href="{{ route('viewVolunteer') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Volunteer</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Intern</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addIntern') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Intern</a>
                                    </li>
                                    <li><a href="{{ route('viewIntern') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Intern</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-image"
                        aria-hidden="true"></i>Our Cell/Unit</a>
                <div class="collapsible-body left-sub-menu">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Legal Cell/Unit</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addLegalCell') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Legal Cell/Unit</a>
                                    </li>
                                    <li><a href="{{ route('viewLegalCell') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Legal Cell/Unit</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Educational Cell</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addEducationalCell') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Educational Cell</a>
                                    </li>
                                    <li><a href="{{ route('viewEducationalCell') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Educational Cell</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Doctor Cell</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addDoctorCell') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Doctor Cell</a>
                                    </li>
                                    <li><a href="{{ route('viewDoctorCell') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Doctor Cell</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Child Right Cell Protection</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addChildRightCell') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Child Right Cell Protection</a>
                                    </li>
                                    <li><a href="{{ route('viewChildRightCell') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Child Right Cell Protection</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>RTI Cell </a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addRtiCell') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add RTI Cell</a>
                                    </li>
                                    <li><a href="{{ route('viewRtiCell') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View RTI Cell</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Media Cell </a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addMediaCell') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Media Cell</a>
                                    </li>
                                    <li><a href="{{ route('viewMediaCell') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Media Cell</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Tribal Rights Protection Cell </a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addTRProtection') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Tribal Rights Protection Cell</a>
                                    </li>
                                    <li><a href="{{ route('viewTRProtection') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Tribal Rights Protection Cell</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Crime Control Unit </a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addCrimeControl') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Crime Control Unit</a>
                                    </li>
                                    <li><a href="{{ route('viewCrimeControl') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Crime Control Unit</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Anti Corruption Unit </a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addAntiCorruption') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Anti Corruption Unit</a>
                                    </li>
                                    <li><a href="{{ route('viewAntiCorruption') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Anti Corruption Unit</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                    aria-hidden="true"></i>Anti Human Trafficking Cell </a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('addAntHmnTrf') }}"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Add Anti Human Trafficking Cellt</a>
                                    </li>
                                    <li><a href="{{ route('viewAntHmnTrf') }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i>View Anti Human Trafficking Cell</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
