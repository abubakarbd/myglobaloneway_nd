<div class="vertical-menu">
    <div class="h-100">
        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{ asset('/') }}images/user.png" alt="" class="avatar-md mx-auto rounded-circle" />
            </div>

            <div class="mt-3">
                <a href="#" class="text-dark font-weight-medium font-size-16">Shimul </a>
                <p class="text-body mt-1 mb-0 font-size-13">
                    <span
                        wire:initial-data='{"id":"GYksccR21HSxw6taqqGv","name":"component.designation-status","redirectTo":false,"locale":"en","events":[],"eventQueue":[],"dispatchQueue":[],"data":[],"children":[],"checksum":"c8bd5c6f3ece9e8e7bf51dd563d19291e023aaf38997e9c81ae1e09e05bbc2b3"}'
                        wire:id="GYksccR21HSxw6taqqGv" style="cursor: default;">
                    </span>
                </p>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('Backend.Member') }}" class="waves-effect">
                        <i class="mdi mdi-monitor"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Backend.Myteam') }}" class="waves-effect"><i
                            class="mdi mdi-view-dashboard"></i> <span> My Group </span> </a>
                </li>

                <li>
                    <a href="{{ route('Backend.Withdrow') }}" class="waves-effect"><i
                            class="mdi mdi-view-dashboard"></i> <span> Withdraw </span> </a>
                </li>

                <li>
                    <a href="{{ route('Backend.Fund') }}" class="waves-effect"><i
                            class="mdi mdi-view-dashboard"></i> <span>Fund </span> </a>
                </li>
                <li>
                    <a href="{{ route('Backend.officeFund') }}" class="waves-effect"><i
                            class="mdi mdi-view-dashboard"></i> <span>Office Fund </span> </a>
                </li>
                <li>
                    <a href="{{ route('Backend.boardAchieveList') }}" class="waves-effect"><i
                            class="mdi mdi-view-dashboard"></i> <span>Oneway Level List </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span>Report
                        </span> <span class="menu-arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('Backend.founderList') }}">Founder Members</a></li>
                        <li><a href="{{ route('Backend.Myteam') }}">Achievement List</a></li>
                        <li><a href="{{ route('Backend.sponsorList') }}">Sponsor List</a></li>
                        <li><a href="{{ route('Backend.sponsoreIncome') }}">Sponsor Income</a></li>
                        <li><a href="{{ route('Backend.matchingIncome') }}">Matching Income</a></li>
                        <li><a href="{{ route('Backend.matchingRoyaltyIncome') }}">One Way Income</a></li>
                        <li><a href="{{ route('Backend.achieverRoyaltyIncome') }}">Incentive Income</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div wire:initial-data='{"id":"43i3V9FvsQdVb0Kxacwd","name":"logout","redirectTo":false,"locale":"en","events":[],"eventQueue":[],"dispatchQueue":[],"data":[],"children":[],"checksum":"46506f9858bb7fbfe654ddbd83268a61bcf4d8cce4466d8d307b595641e00abf"}'
                        wire:id="43i3V9FvsQdVb0Kxacwd">
                        <button class="dropdown-item text-danger" type="button" wire:click="logout"><i
                                class="mdi mdi-power font-size-16 align-middle mr-1 text-danger"></i> Logout</button>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>