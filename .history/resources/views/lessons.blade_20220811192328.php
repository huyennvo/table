@extends('layouts.content-header')
@section('content-body')
    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lessons</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" >
                  <thead>                  
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th style="width: 10px">Course ID</th>
                      <th>Name</th>
                      <th>Teacher</th>
                      <th style="width: 15%">Description</th>
                      <th style="width: 15%">Quiz</th>
                      <th style="width: 15%">Document</th>
                      <th style="width: 15%">Homework</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-align:center;">1</td>
                      <td>1</td>
                      <td>ABC</td>
                      <td style="text-align:center;">
                        Nguyen Van A
                      </td>
                      <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, distinctio nulla doloribus voluptatum autem recusandae placeat suscipit voluptatem sunt nesciunt iste commodi, delectus molestias praesentium aperiam. Laborum aliquam repellendus impedit!</td>
                      <td>aaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaa aaaaaaaa</td>
                      <td>aaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaa aaaaaaaa</td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">1</td>
                      <td>1</td>
                      <td>ABC</td>
                      <td style="text-align:center;">
                        Nguyen Van A
                      </td>
                      <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, distinctio nulla doloribus voluptatum autem recusandae placeat suscipit voluptatem sunt nesciunt iste commodi, delectus molestias praesentium aperiam. Laborum aliquam repellendus impedit!</td>
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
@endsection
