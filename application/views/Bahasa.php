<!DOCTYPE html>
<html lang="en">

<body class="g-sidenav-show  bg-gray-100">
    <?php $this->load->view('Aset/Aside1') ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php $this->load->view('Aset/Navbar') ?>
        <div class="container-fluid py-4">
            <div class="row my-4">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Data Absen Bahasa</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th rowspan="2" class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Mahasantri</th>
                                            <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kamar</th>
                                            <th colspan="9" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bulan November</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">1</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">4</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">8</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">11</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">15</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">18</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">22</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">25</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">29</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Muhammad Arief Hakim P.</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">47</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k1 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">2</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Wildan Arief Firdaus</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">47</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k2 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">3</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Muhammad Diva Yoga P.</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">47</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k3 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">4</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Mokhammad Tajul Muluk R.</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">47</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k4 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">5</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Mohamad Badrus Syarof A.</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">47</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k5 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">6</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Ifan Rafly Ramadhani</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">47</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k6 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">7</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Moh Hasan Ainul Muluk</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">48</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k7 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">8</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Muhammad Nur Surya S.</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">48</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k8 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">9</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Aditya Putra Pratama</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">48</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k9 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">10</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Mohamad Ahsin Maulana H.</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">48</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k10 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">11</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Muhammad Noer Ezzad</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">48</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k11 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">12</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Akbar Fariz Ramzy</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">48</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k12 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">13</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Moh. Yamiji</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">47</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k13 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">14</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Andhika Dwi Oktavian</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">49</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k14 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">15</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Raihan Syauqi</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">49</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k15 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">16</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Muhammad Firdaus</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">49</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k16 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">17</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Ramzi Yazin Sulaiman</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">49</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k17 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                        
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">18</span>
                                            </td>
                                            <td class="align-middle text-left">
                                                <span class="text-secondary text-xs font-weight-bold">Gandrung Margi Gusti</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">49</span>
                                            </td>
                                            <?php
                                            $count = 0;
                                            foreach ($k18 as $row) {
                                                $count = $count + 1;
                                            ?>
                                                <td class="align-middle text-center">
                                                    <?php if ($row->info == "Hadir") { ?>
                                                        <i class="fa fa-check-circle-o" style="color: #54B435"></i>
                                                    <?php } else { ?>
                                                        <i class="fa fa-times-circle-o" style="color: #DC3535"></i>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('Aset/Footer') ?>
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">
            </div>
        </div>
    </div>
    <?php $this->load->view('Aset/JS') ?>
</body>

</html>