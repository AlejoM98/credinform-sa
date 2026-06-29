setTimeout(() => {
  var kanban2 = new jKanban({
    element: '#demo2',    
    gutter: '15px',    
    boards: [{
        'id': '_evaluados',
        'element': '1',
        'title': 'Evaluados',
        'class': 'bg-primary',
        'dragTo': ['_comite'],
        'item': itemEvaluado
      },
      {
        'id': '_comite',
        'element': '2',
        'title': 'Comite',
        'class': 'bg-warning',
        'dragTo': ['_cierre','_evaluados'],
        'item': Comite
      },
      {
        'id': '_cierre',
        'element': '3',
        'title': 'Cierre',
        'class': 'bg-secondary',
        'dragTo': ['_ejecutado','_comite'],
        'item': Cierre
      },
      {
        'id': '_ejecutado',
        'element': '4',
        'title': 'Ejecutado',
        'class': 'bg-danger',
        'dragTo': ['_cierre'],
        'item': Ejecutado
      }
    ],
    dropEl: function (el, target, source, sibling) {
      console.log($(target.parentElement).data("id"));
      console.log($(el.children)[0]['id']);
      var d = new Date();
      $.ajax({
        url: '../assets/ajax/kanban.php',
        method: 'post',
        data: {
          elemento: $(el.children)[0]['id'],
          target: $(target.parentElement).data("id"),
          fecha: d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear(),
          hora: d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()
        },
        success: function(respuesta){
          console.log(respuesta);
          if(respuesta == 'true'){
            $.notify('<i class="fa fa-bell-o"></i><strong>Exito </strong> La tarea se ha movido...', {
              type: 'theme',
              allow_dismiss: true,
              delay: 2000,
              showProgressbar: true,
              timer: 300
            });
          }else{
            $.notify('<i class="fa fa-bell-o"></i><strong>Error</strong> Algo ha ocurrido, ningun cambio se ha registrado...', {
              type: 'theme',
              allow_dismiss: true,
              delay: 2000,
              showProgressbar: true,
              timer: 300
            });
          }
        }
      });
    }, 
    click : function (el) {
      location.href = './tarea.php?id=' + $(el.children)[0]['id'];
    }
  });
}, 100);

var toDoButton = document.getElementById('addToDo');
toDoButton.addEventListener('click', function () {
  kanban2.addElement(
    '_todo', {
      'title': `
                               <a class="kanban-box" href="#"><span class="date">24/7/20</span><span class="badge badge-danger f-right">Argent</span>
                                <img class="mt-2 img-fluid" src="../assets/images/other-images/sidebar-bg.jpg" alt="" data-original-title="" title="">
                                <h6>Test Sidebar</h6>
                                <div class="media"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                                  <div class="media-body">
                                    <p>Themeforest, australia</p>
                                  </div>
                                </div>
                                <div class="d-flex mt-3">
                                  <ul class="list">
                                    <li><i class="fa fa-comments-o"></i>2</li>
                                    <li><i class="fa fa-paperclip"></i>2</li>
                                    <li><i class="fa fa-eye"></i></i></li>
                                  </ul>
                                  <div class="customers">
                                    <ul>
                                      <li class="d-inline-block me-3">
                                        <p class="f-12">+5</p>
                                      </li>
                                      <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                      <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                      <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                    </ul>
                                  </div>
                                </div></a>
                            `,
    }
  );
});

var addBoardDefault = document.getElementById('addDefault');
addBoardDefault.addEventListener('click', function () {
  kanban2.addBoards(
    [{
      'id': '_default',
      'title': 'Kanban Default',
      'item': [{
          'title': `
                               <a class="kanban-box" href="#"><span class="date">24/7/20</span><span class="badge badge-danger f-right">Argent</span>
                                <h6>Test Sidebar</h6>
                                <div class="media"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                                  <div class="media-body">
                                    <p>Themeforest, australia</p>
                                  </div>
                                </div>
                                <div class="d-flex mt-3">
                                  <ul class="list">
                                    <li><i class="fa fa-comments-o"></i>2</li>
                                    <li><i class="fa fa-paperclip"></i>2</li>
                                    <li><i class="fa fa-eye"></i></i></li>
                                  </ul>
                                  <div class="customers">
                                    <ul>
                                      <li class="d-inline-block me-3">
                                        <p class="f-12">+5</p>
                                      </li>
                                      <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                      <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                      <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                    </ul>
                                  </div>
                                </div></a>
                            `,
        },

        {
          'title': `
                               <a class="kanban-box" href="#"><span class="date">24/7/20</span><span class="badge badge-danger f-right">Argent</span>
                                <img class="mt-2 img-fluid" src="../assets/images/other-images/maintenance-bg.jpg" alt="" data-original-title="" title="">
                                <h6>Test Sidebar</h6>
                                <div class="media"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                                  <div class="media-body">
                                    <p>Themeforest, australia</p>
                                  </div>
                                </div>
                                <div class="d-flex mt-3">
                                  <ul class="list">
                                    <li><i class="fa fa-comments-o"></i>2</li>
                                    <li><i class="fa fa-paperclip"></i>2</li>
                                    <li><i class="fa fa-eye"></i></i></li>
                                  </ul>
                                  <div class="customers">
                                    <ul>
                                      <li class="d-inline-block me-3">
                                        <p class="f-12">+5</p>
                                      </li>
                                      <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                      <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                      <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                    </ul>
                                  </div>
                                </div></a>
                            `,
        }
      ]
    }]
  )
});

var removeBoard = document.getElementById('removeBoard');
removeBoard.addEventListener('click', function () {
  kanban2.removeBoard('_done');
});
