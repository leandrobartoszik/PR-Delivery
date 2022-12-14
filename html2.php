<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<style type="text/css"> body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 5rem
 }

 .card {
     background: #fff;
     border-width: 0;
     border-radius: .25rem;
     box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
     margin-bottom: 1.5rem
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid rgba(19, 24, 44, .125);
     border-radius: .25rem
 }

 .list-item {
     position: relative;
     display: -ms-flexbox;
     display: flex;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word
 }

 .list-item.block .media {
     border-bottom-left-radius: 0;
     border-bottom-right-radius: 0
 }

 .list-item.block .list-content {
     padding: 1rem
 }

 .w-40 {
     width: 40px !important;
     height: 40px !important
 }

 .avatar {
     position: relative;
     line-height: 1;
     border-radius: 500px;
     white-space: nowrap;
     font-weight: 700;
     border-radius: 100%;
     display: -ms-flexbox;
     display: flex;
     -ms-flex-pack: center;
     justify-content: center;
     -ms-flex-align: center;
     align-items: center;
     -ms-flex-negative: 0;
     flex-shrink: 0;
     border-radius: 500px;
     box-shadow: 0 5px 10px 0 rgba(50, 50, 50, .15)
 }

 .avatar img {
     border-radius: inherit;
     width: 100%
 }

 .gd-primary {
     color: #fff;
     border: none;
     background: #448bff linear-gradient(45deg, #448bff, #44e9ff)
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 .text-color {
     color: #5e676f
 }

 .text-sm {
     font-size: .825rem
 }

 .h-1x {
     height: 1.25rem;
     overflow: hidden;
     display: -webkit-box;
     -webkit-line-clamp: 1;
     -webkit-box-orient: vertical
 }

 .no-wrap {
     white-space: nowrap
 }

 .list-row .list-item {
     -ms-flex-direction: row;
     flex-direction: row;
     -ms-flex-align: center;
     align-items: center;
     padding: .75rem .625rem
 }

 .list-item {
     position: relative;
     display: -ms-flexbox;
     display: flex;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word
 }

 .list-row .list-item>* {
     padding-left: .625rem;
     padding-right: .625rem
 }

 .dropdown {
     position: relative
 }

 a:focus,
 a:hover {
     text-decoration: none
 }

 list-item {
     background: white
 }</style>
</body>
</html><script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    });
</script>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row">
            <div class="col-sm-8">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="list list-row card" id="sortable" data-sortable-id="0" aria-dropeffect="move">
                        <div class="list-item" data-id="13" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-primary">P</span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Patrick Linod</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would it be advisable for me to think about business content?</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">3 weeks ago</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item" data-id="9" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-info"><img src="https://moinhoglobo.com.br/wp-content/uploads/2019/05/16-hamburguer-1024x683.jpeg" alt="."></span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Steven Hmpire</a>
                                <div class="item-except text-muted text-sm h-1x">Build a progressive web app using jQuery</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">2 days ago</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item" data-id="17" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-warning">A</span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Alan musk</a>
                                <div class="item-except text-muted text-sm h-1x">it be advisable for me to think about business content?</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">13/12 18</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item" data-id="8" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-success"><img src="https://img.icons8.com/doodle/24/000000/user-male.png" alt="."></span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Lawrence Telon</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would it be advisable for me to think</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">02/11 18</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item" data-id="10" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-danger"><img src="https://img.icons8.com/color/16/000000/administrator-male.png" alt="."></span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Stuart Clark</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would, i think about business content?</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">1 day ago</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item" data-id="3" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-primary"><img src="https://img.icons8.com/bubbles/16/000000/administrator-male.png" alt="."></span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Jordan Stephens</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would it be advisable for me to think about business</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">1 hour ago</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>