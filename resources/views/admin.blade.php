@extends ('layouts.admin')
@section ('contenido')
    <h3>Hello Admin</h3>
    <h2 class="page-header">Social Widgets</h2>

<div class="row">
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-yellow">
        <div class="widget-user-image">
          <img class="img-circle" src="../img/user7-128x128.jpg" alt="User Avatar">
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username">Nadia Carmichael</h3>
        <h5 class="widget-user-desc">Lead Developer</h5>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
          <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
          <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
          <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
        </ul>
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-aqua-active">
        <h3 class="widget-user-username">Alexander Pierce</h3>
        <h5 class="widget-user-desc">Founder &amp; CEO</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="../img/user1-128x128.jpg" alt="User Avatar">
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">3,200</h5>
              <span class="description-text">SALES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">13,000</h5>
              <span class="description-text">FOLLOWERS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">35</h5>
              <span class="description-text">PRODUCTS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-black" style="background: url('../img/photo1.png') center center;">
        <h3 class="widget-user-username">Elizabeth Pierce</h3>
        <h5 class="widget-user-desc">Web Designer</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="../img/user3-128x128.jpg" alt="User Avatar">
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">3,200</h5>
              <span class="description-text">SALES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">13,000</h5>
              <span class="description-text">FOLLOWERS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">35</h5>
              <span class="description-text">PRODUCTS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

<div class="row">
  <div class="col-md-6">
    <!-- Box Comment -->
    <div class="box box-widget">
      <div class="box-header with-border">
        <div class="user-block">
          <img class="img-circle" src="../img/user1-128x128.jpg" alt="User Image">
          <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
          <span class="description">Shared publicly - 7:30 PM Today</span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
            <i class="fa fa-circle-o"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <img class="img-responsive pad" src="../img/photo2.png" alt="Photo">

        <p>I took this photo this morning. What do you guys think?</p>
        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
        <span class="pull-right text-muted">127 likes - 3 comments</span>
      </div>
      <!-- /.box-body -->
      <div class="box-footer box-comments">
        <div class="box-comment">
          <!-- User image -->
          <img class="img-circle img-sm" src="../img/user3-128x128.jpg" alt="User Image">

          <div class="comment-text">
                <span class="username">
                  Maria Gonzales
                  <span class="text-muted pull-right">8:03 PM Today</span>
                </span><!-- /.username -->
            It is a long established fact that a reader will be distracted
            by the readable content of a page when looking at its layout.
          </div>
          <!-- /.comment-text -->
        </div>
        <!-- /.box-comment -->
        <div class="box-comment">
          <!-- User image -->
          <img class="img-circle img-sm" src="../img/user4-128x128.jpg" alt="User Image">

          <div class="comment-text">
                <span class="username">
                  Luna Stark
                  <span class="text-muted pull-right">8:03 PM Today</span>
                </span><!-- /.username -->
            It is a long established fact that a reader will be distracted
            by the readable content of a page when looking at its layout.
          </div>
          <!-- /.comment-text -->
        </div>
        <!-- /.box-comment -->
      </div>
      <!-- /.box-footer -->
      <div class="box-footer">
        <form action="#" method="post">
          <img class="img-responsive img-circle img-sm" src="../img/user4-128x128.jpg" alt="Alt Text">
          <!-- .img-push is used to add margin to elements next to floating images -->
          <div class="img-push">
            <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
          </div>
        </form>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  <div class="col-md-6">
    <!-- Box Comment -->
    <div class="box box-widget">
      <div class="box-header with-border">
        <div class="user-block">
          <img class="img-circle" src="../img/user1-128x128.jpg" alt="User Image">
          <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
          <span class="description">Shared publicly - 7:30 PM Today</span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
            <i class="fa fa-circle-o"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <!-- post text -->
        <p>Far far away, behind the word mountains, far from the
          countries Vokalia and Consonantia, there live the blind
          texts. Separated they live in Bookmarksgrove right at</p>

        <p>the coast of the Semantics, a large language ocean.
          A small river named Duden flows by their place and supplies
          it with the necessary regelialia. It is a paradisematic
          country, in which roasted parts of sentences fly into
          your mouth.</p>

        <!-- Attachment -->
        <div class="attachment-block clearfix">
          <img class="attachment-img" src="../img/photo1.png" alt="Attachment Image">

          <div class="attachment-pushed">
            <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

            <div class="attachment-text">
              Description about the attachment can be placed here.
              Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
            </div>
            <!-- /.attachment-text -->
          </div>
          <!-- /.attachment-pushed -->
        </div>
        <!-- /.attachment-block -->

        <!-- Social sharing buttons -->
        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
        <span class="pull-right text-muted">45 likes - 2 comments</span>
      </div>
      <!-- /.box-body -->
      <div class="box-footer box-comments">
        <div class="box-comment">
          <!-- User image -->
          <img class="img-circle img-sm" src="../img/user3-128x128.jpg" alt="User Image">

          <div class="comment-text">
                <span class="username">
                  Maria Gonzales
                  <span class="text-muted pull-right">8:03 PM Today</span>
                </span><!-- /.username -->
            It is a long established fact that a reader will be distracted
            by the readable content of a page when looking at its layout.
          </div>
          <!-- /.comment-text -->
        </div>
        <!-- /.box-comment -->
        <div class="box-comment">
          <!-- User image -->
          <img class="img-circle img-sm" src="../img/user5-128x128.jpg" alt="User Image">

          <div class="comment-text">
                <span class="username">
                  Nora Havisham
                  <span class="text-muted pull-right">8:03 PM Today</span>
                </span><!-- /.username -->
            The point of using Lorem Ipsum is that it has a more-or-less
            normal distribution of letters, as opposed to using
            'Content here, content here', making it look like readable English.
          </div>
          <!-- /.comment-text -->
        </div>
        <!-- /.box-comment -->
      </div>
      <!-- /.box-footer -->
      <div class="box-footer">
        <form action="#" method="post">
          <img class="img-responsive img-circle img-sm" src="../img/user4-128x128.jpg" alt="Alt Text">
          <!-- .img-push is used to add margin to elements next to floating images -->
          <div class="img-push">
            <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
          </div>
        </form>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
@endsection