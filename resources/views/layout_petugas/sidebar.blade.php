<aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" style="width: 50px; height: 50px; @media screen(max-width: 40px; max-height: 40px;)" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ Auth()->user()->nama_petugas }}</p>
          <p class="app-sidebar__user-designation">{{ Auth()->user()->level }}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ url('admin/halaman_petugas') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item " href="{{ route('asEntri.index') }}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Entri Transaksi Pembayaran</span></a></li>
        <li><a class="app-menu__item " href="{{ route('asHistory.index') }}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Lihat History Pembayaran</span></a></li>
        <li><a class="app-menu__item " href="{{ route('asSaranP.index') }}"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Kritik & Saran</span></a></li>
      </ul>

    </aside>