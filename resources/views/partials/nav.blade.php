

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="brand">
        <a href="index.html"></a>
    </div>
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="elements.html" class=""><i class="fa fa-tasks"></i> <span>My Units</span></a></li>

            </ul>
        </nav>
    </div>
    <a class="footer" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i> Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>
<!-- END SIDEBAR -->
