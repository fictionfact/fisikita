<div class="user-panel">
  <div class="pull-left image">
    <img src="{{ backpack_avatar_url(Auth::User()->username) }}" class="img-circle pull-left image" alt="User Image">
  </div>
  <div class="pull-left info">
    <p style="color:#b8c7ce;">{{ Auth::User()->username }}</p>
    <small><small><a href="{{ backpack_url('logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></small></small>
  </div>
</div>