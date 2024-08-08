  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      {{-- <a href="{{ route('dashboard') }}" class="brand-link">
          <img src="{{ asset('admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Admin</span>
      </a> --}}

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="" class="d-block">{{ Auth::user()->name }}</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <nav>
              <ul class="space-y-2">
                  <li>
                      <a href="{{ route('category.index') }}"
                          class="flex items-center text-sm font-medium text-white hover:text-gray-300">
                          <i class="fas fa-folder mr-2"></i> Categories
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('posts.index') }}"
                          class="flex items-center text-sm font-medium text-white hover:text-gray-300">
                          <i class="fas fa-folder mr-2"></i> Posts
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('tags.index') }}"
                          class="flex items-center text-sm font-medium text-white hover:text-gray-300">
                          <i class="fas fa-folder mr-2"></i> Tags
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('users.index') }}"
                          class="flex items-center text-sm font-medium text-white hover:text-gray-300">
                          <i class="fas fa-folder mr-2"></i> User
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('comment.index') }}"
                          class="flex items-center text-sm font-medium text-white hover:text-gray-300">
                          <i class="fas fa-folder mr-2"></i> Comment
                      </a>
                  </li>
              </ul>
          </nav>

      </div>
      <!-- /.sidebar -->

  </aside>
