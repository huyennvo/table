@extends('layouts.content-header')
@section('content-body')
    <!-- Main content -->
    <div class="container">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bài giảng</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="position: absolute;  right: 2%; vertical-align: middle;" >Thêm mới</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" >
                  <thead>                  
                    <tr>
                      <th style="width: 10px">STT</th>
                      <th class="course-id" style="width: 10px">Khóa học</th>
                      <th class="name">Tên Bài giảng</th>
                      <th>Giáo viên</th>
                      <th style="width: 15%">Mô tả</th>
                      <th style="width: 15%">Quiz</th>
                      <th style="width: 15%">Tài liệu</th>
                      <th style="width: 15%">Bài tập về nhà</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-align:center;">1</td>
                      <td class="course-id">1</td>
                      <td class="name">ABC</td>
                      <td style="text-align:center;">
                        Nguyen Van A
                      </td>
                      <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, distinctio nulla doloribus voluptatum autem recusandae placeat suscipit voluptatem sunt nesciunt iste commodi, delectus molestias praesentium aperiam. Laborum aliquam repellendus impedit!</td>
                      <td>aaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaa aaaaaaaa</td>
                      <td>aaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaa aaaaaaaa</td>
                      <td>aaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaa aaaaaaaa</td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">1</td>
                      <td class="course-id" >1</td>
                      <td class="name">ABC</td>
                      <td style="text-align:center;">
                        Nguyen Van A
                      </td>
                      <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, distinctio nulla doloribus voluptatum autem recusandae placeat suscipit voluptatem sunt nesciunt iste commodi, delectus molestias praesentium aperiam. Laborum aliquam repellendus impedit!</td>
                      <td>aaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaa aaaaaaaa</td>
                      <td>aaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaa aaaaaaaa</td>
                      <td>aaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaa aaaaaaaa</td>
                    </tr>

                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>

          </div>

        </div>
  

        <!-- /.row -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      <form action="/action_page.php">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
        <!-- Modal body -->

        
          
          <div class="modal-body">
          <label for="fname">First name: </label>
          <input type="text" id="fname" name="fname"><br><br>
          <label for="lname">Last name: </label>
          <input type="text" id="lname" name="lname"><br><br>
          
          </div>

       
        <!-- Modal footer -->

        <div class="modal-footer">
        <input type="submit" value="Submit">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        </div> </form> 

      </div>
    </div>
  </div>
  
</div>
@endsection
