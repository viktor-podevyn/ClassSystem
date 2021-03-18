
<section class="general-section justify-content-center">

    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="search-wrap">
                <div class="container">
                    <h4>Look for a specific student via this search bar</h4>
                    <form action="" method="onsubmit" class="search-form">
                        <button type="submit" value="search" id="searchButton">search</button>
                        <input type="text" class="search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center padding">
        <div class="table-responsive">
            <table class="table table-hover" data-toggle="table">
                <thead>
                <tr class="justify-content-center">
                    <th data-sortable="true" scope="col" data-field="Name">Name</th>
                    <th data-sortable="true" scope="col" data-field="Class">Email</th>
                    <th data-sortable="true" scope="col" data-field="Class">Class</th>
                    <th data-sortable="true" scope="col" data-field="Class">Teacher</th>
                </tr>
                </thead>
                <tbody>
                <tr class="clickable" data-href="#">
                    <td>
                        <?php echo $student['name'];
                        var_dump($student);?>
                    </td>
                    <td>
                        <?php echo $student['email'];
                        var_dump($student['email']);?>
                    </td>
                    <td>
                        <a class="nav-link" href="generalclass.php?page=class"><?php echo $student['className'];?></a>
                    </td>
                    <td>
                        <a class="nav-link" href="general-view.php?page=teacher"><?php echo $teacher['teacherID'];?></a>
                    </td>

                </tbody>
            </table>
        </div>
    </div>
</section>


