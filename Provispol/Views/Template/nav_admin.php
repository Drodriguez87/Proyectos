    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media();?>/images/uploads/avatar.png" alt="Imagen de Usuario">
        <div>
          <p class="app-sidebar__user-name">David Rodriguez</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
            <i class="app-menu__icon bi bi-speedometer"></i>
            <span class="app-menu__label">Dashboard</span></a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa-solid fa-users"></i>
                <span class="app-menu__label">Usuarios</span>
                <i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/usuarios">
                    <i class="icon bi bi-person-gear"></i> Usuarios</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/roles">
                    <i class="icon bi bi-person-check"></i> Roles</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/permisos">
                    <i class="icon bi bi-person-exclamation"></i> Permisos</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon bi bi-clipboard-data"></i>
                <span class="app-menu__label">Productos</span>
                <i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/productos">
                    <i class="icon bi bi-basket3"></i> Productos</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/op">
                    <i class="icon bi bi bi-0-square"></i> OP</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/remision">
                    <i class="icon bi bi-1-square"></i> Remision</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon bi bi-filter-square"></i>
                <span class="app-menu__label">Movimientos</span>
                <i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/extruccion">
                    <i class="icon  bi bi-check-square"></i> Extruccion</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/laminado">
                    <i class="icon bi bi-check-square"></i> Laminado</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/refilado">
                    <i class="icon bi bi-check-square"></i> Refilado</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/sellado">
                    <i class="icon bi bi-check-square"></i> Sellado</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/impresion">
                    <i class="icon bi bi-check-square"></i> Impresion</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon bi bi-building"></i>
                <span class="app-menu__label">Sedes</span>
                <i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/bogota">
                    <i class="icon bi bi-buildings-fill"></i> Bogota</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/mosquera">
                    <i class="icon bi bi-buildings"></i> Mosquera</a>
                </li>
            </ul>
        </li>
            <a class="app-menu__item" href="<?= base_url(); ?>/logout">
            <i class="app-menu__icon bi bi-box-arrow-right"></i>
            <span class="app-menu__label">Logout</span></a>
        </li>
      </ul>
    </aside>