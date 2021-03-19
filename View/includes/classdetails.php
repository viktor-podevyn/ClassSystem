
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
            <table>
                <thead>
                <tr class="justify-content-center">
                    <th data-sortable="true" scope="col" data-field="Name">Class ID</th>
                    <th data-sortable="true" scope="col" data-field="Class">Class</th>
                    <th data-sortable="true" scope="col" data-field="Class">Location</th>
                    <th data-sortable="true" scope="col" data-field="Class">Teacher ID</th>
                </tr>
                </thead>
                <tr>
                    <td><?php echo $class['classID']; ?></td>
                    <td><?php echo $class['className']; ?></td>
                    <td><?php echo $class['location']; ?></td>
                    <td><?php echo $class['teacherID']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</section>





