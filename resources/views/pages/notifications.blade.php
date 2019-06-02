@extends('layouts.app', ['activePage' => 'notifications', 'titlePage' => __('Notifications')])--}}
@section('content')
    <div class="content">
      <div class="container-fluid">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->

<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
data-backdrop="static" data-keyboard="false">

<div class="modal-dialog modal-xl" role="document">


    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b>{{ __('CREAR NUEVO ROL') }}</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <ul class="nav nav-pills nav-pills-primary" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false">
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link3" role="tablist" aria-expanded="false">
                    Options
                </a>
            </li>
        </ul>

        <div class="modal-body">




            <div class="tab-content tab-space">
                <div class="tab-pane active" id="link1" aria-expanded="true">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                    <br><br>
                    Dramatically visualize customer directed convergence without revolutionary ROI.
                </div>
                <div class="tab-pane" id="link2" aria-expanded="false">
                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                    <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                </div>
                <div class="tab-pane" id="link3" aria-expanded="false">
                    Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                    <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                </div>
            </div>




        </div>


        <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            <button type="submit" class="btn btn-primary">{{ __('GUARDAR') }}</button>
        </div>
    </div>
</div>
</div>
          <div class="row">
              <div class='col-sm-6'>
                  <input type='text' class="form-control" id='datetimepicker4' />
              </div>

          </div>

          <select class="selectpicker">
              <option title="Combo 1">Hot Dog, Fries and a Soda</option>
              <option title="Combo 2">Burger, Shake and a Smile</option>
              <option title="Combo 3">Sugar, Spice and all things nice</option>
          </select>

          <button class="btn btn-primary btn-fill" onclick='
   Swal.fire({
   title: "Are you sure?",
          text: "You won t be able to revert this!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
          }).then((result) => {
          if (result.value) {
          Swal.fire(
          "Deleted!",
          "Your file has been deleted.",
          "success"
          )
          }
          })
'

          >Try me!</button>



          <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" data-container="body" data-original-title="Popover Title" data-content="And here's some amazing content. It's very engaging. Right?" data-color="primary">Click to toggle popover</button>

          <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
              Tooltip on top
          </button>
          <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
              Tooltip on right
          </button>
          <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
              Tooltip on bottom
          </button>
          <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
              Tooltip on left
          </button>



          <div class="dropdown bootstrap-select show"><select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Single Select" tabindex="-98"><option class="bs-title-option" value=""></option>
                  <option disabled="" selected="">Single Option</option>
                  <option value="2">Foobar</option>
                  <option value="3">Is great</option>
                  <option value="4">Is bum</option>
                  <option value="5">Is wow</option>
                  <option value="6">boom</option>
              </select><button type="button" class="dropdown-toggle btn btn-primary btn-round" data-toggle="dropdown" role="button" title="Single Option" aria-expanded="true"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Single Option</div></div> </div><div class="ripple-container"></div></button><div class="dropdown-menu show" role="combobox" style="overflow: hidden; position: absolute; top: 46px; left: 1px; will-change: top, left;" x-placement="bottom-start"><div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="overflow-y: auto;"><ul class="dropdown-menu inner show"><li class="disabled selected active"><a role="option" class="dropdown-item disabled selected active" aria-disabled="true" tabindex="-1" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">Single Option</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Foobar</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Is great</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Is bum</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Is wow</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">boom</span></a></li></ul></div></div></div>
      </div>
    </div>



@endsection







{{--@extends('layouts.app', ['activePage' => 'notifications', 'titlePage' => __('Notifications')])--}}

{{--@section('content')--}}
{{--<div class="content">--}}
{{--  <div class="container-fluid">--}}
{{--    <div class="card">--}}
{{--      <div class="card-header card-header-primary">--}}
{{--        <h3 class="card-title">Notifications</h3>--}}
{{--        <p class="card-category">Handcrafted by our friend--}}
{{--          <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the--}}
{{--          <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>--}}
{{--        </p>--}}
{{--      </div>--}}
{{--      <div class="card-body">--}}
{{--        <div class="row">--}}
{{--          <div class="col-md-6">--}}
{{--            <h4 class="card-title">Notifications Style</h4>--}}
{{--            <div class="alert alert-info">--}}
{{--              <span>This is a plain notification</span>--}}
{{--            </div>--}}
{{--            <div class="alert alert-info">--}}
{{--              <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <i class="material-icons">close</i>--}}
{{--              </button>--}}
{{--              <span>This is a notification with close button.</span>--}}
{{--            </div>--}}
{{--            <div class="alert alert-info alert-with-icon" data-notify="container">--}}
{{--              <i class="material-icons" data-notify="icon">add_alert</i>--}}
{{--              <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <i class="material-icons">close</i>--}}
{{--              </button>--}}
{{--              <span data-notify="message">This is a notification with close button and icon.</span>--}}
{{--            </div>--}}
{{--            <div class="alert alert-info alert-with-icon" data-notify="container">--}}
{{--              <i class="material-icons" data-notify="icon">add_alert</i>--}}
{{--              <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <i class="material-icons">close</i>--}}
{{--              </button>--}}
{{--              <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6">--}}
{{--            <h4 class="card-title">Notification states</h4>--}}
{{--            <div class="alert alert-info">--}}
{{--              <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <i class="material-icons">close</i>--}}
{{--              </button>--}}
{{--              <span>--}}
{{--                <b> Info - </b> This is a regular notification made with ".alert-info"</span>--}}
{{--            </div>--}}
{{--            <div class="alert alert-success">--}}
{{--              <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <i class="material-icons">close</i>--}}
{{--              </button>--}}
{{--              <span>--}}
{{--                <b> Success - </b> This is a regular notification made with ".alert-success"</span>--}}
{{--            </div>--}}
{{--            <div class="alert alert-warning">--}}
{{--              <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <i class="material-icons">close</i>--}}
{{--              </button>--}}
{{--              <span>--}}
{{--                <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>--}}
{{--            </div>--}}
{{--            <div class="alert alert-danger">--}}
{{--              <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <i class="material-icons">close</i>--}}
{{--              </button>--}}
{{--              <span>--}}
{{--                <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>--}}
{{--            </div>--}}
{{--            <div class="alert alert-primary">--}}
{{--              <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <i class="material-icons">close</i>--}}
{{--              </button>--}}
{{--              <span>--}}
{{--                <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="col-md-12">--}}
{{--        <div class="places-buttons">--}}
{{--          <div class="row">--}}
{{--            <div class="col-md-6 ml-auto mr-auto text-center">--}}
{{--              <h4 class="card-title">--}}
{{--                Notifications Places--}}
{{--                <p class="category">Click to view notifications</p>--}}
{{--              </h4>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="row">--}}
{{--            <div class="col-lg-8 col-md-10 ml-auto mr-auto">--}}
{{--              <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                  <button class="btn btn-primary btn-block" onclick="md.showNotification('top','left')">Top Left</button>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                  <button class="btn btn-primary btn-block" onclick="md.showNotification('top','center')">Top Center</button>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                  <button class="btn btn-primary btn-block" onclick="md.showNotification('top','right')">Top Right</button>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="row">--}}
{{--            <div class="col-lg-8 col-md-10 ml-auto mr-auto">--}}
{{--              <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                  <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','left')">Bottom Left</button>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                  <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','center')">Bottom Center</button>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                  <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','right')">Bottom Right</button>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}
{{--@endsection--}}
