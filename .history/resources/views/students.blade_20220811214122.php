@extends('layouts.content-header')
@section('content-body')


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lessons</h3>
              </div>

              <div class="card-body">
                <div class="table table-bordered">
                    <div class="table-scroll">
                        <table class="table-main">
                            <thead>
                                <tr>
                                    <th class="fix-col1">ID</th>
                                    <th class="fix-col2">Name</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Birthday</th>
                                    <th>Native Place</th>
                                    <th>Nation</th>
                                    <th>Religion</th>
                                    <th>Citizen Identify</th>
                                    <th>Designation</th>
                                    <th>Experience</th>
                                    <th>Technology</th>
                                    <th>Company</th>
                                    <th>Location</th>
                                    <th>Contact No.</th>
                                    <th>Address</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fix-col1">1</td>
                                    <td class="fix-col2">Bob</td>
                                    <td>
                                        <img src="" alt="ảnh học viên nhưng bị lỗi">
                                    </td>
                                    <td>Front End Developer</td>
                                    <td>5 yrs</td>
                                    <td>HTML,CSS</td>
                                    <td>Google</td>
                                    <td>California</td>
                                    <td>9876543210</td>
                                    <td>Google Office</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>
    


@endsection

