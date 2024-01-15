<section id="menu">
    <div class="logo">
        <img src="/images/utora_logo.png" alt=""/>
    </div>
    <div class="items">
        <ul>
            <li 
                onclick="location.href='/dashboard'"
                class="{{ parse_url(url()->current())['path']=='/dashboard'? 'active' : ''}}"
                >
                <i class="fa-solid fa-chart-simple"></i>
                <a href="/dashboard">Dashboard</a>
            </li>
            <li 
                onclick="location.href='/dashboard/candidates'"
                class="{{ 
                          str_contains(parse_url(url()->current())['path'], '/dashboard/candidate')
                          ? 'active' 
                          : ''
                        }}"
                >
                <i class="fa-solid fa-user-tie"></i>
                <a href="/dashboard/candidates">Candidates</a>
            </li>
            <li 
                onclick="location.href='/dashboard/managers'"
                class="{{ 
                          str_contains(parse_url(url()->current())['path'], '/dashboard/manager')
                          ? 'active' 
                          : ''
                        }}"
                >
                <i class="fa-solid fa-people-carry-box"></i>
                <a href="/dashboard/managers">Management Team</a>
            </li>
            <li 
                onclick="location.href='/dashboard/voters'"
                class="{{ 
                          str_contains(parse_url(url()->current())['path'], '/dashboard/voter')
                          ? 'active' 
                          : ''
                        }}"
            >
                <i class="fa-solid fa-user"></i>
                <a href="/dashboard/voters">Voters</a>
            </li>
            <li 
                onclick="location.href='/dashboard/elections'"
                class="{{
                          str_contains(parse_url(url()->current())['path'], '/dashboard/election')
                          ? 'active' 
                          : ''
                        }}"
                >
                <i class="fa-solid fa-hand-point-up"></i>
                <a href="/dashboard/elections">Elections</a>
            </li>
            <li 
                onclick="location.href='/dashboard/parties'"
                class="{{
                          str_contains(parse_url(url()->current())['path'], '/dashboard/part')
                          ? 'active' 
                          : ''
                        }}"
                >
                <i class="fa-solid fa-scale-balanced"></i>
                <a href="/dashboard/parties">Parties</a>
            </li>
        </ul>
    </div>
</section>