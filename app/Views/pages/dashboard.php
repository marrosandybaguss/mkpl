<div class="container-fluid">
    <h5 class="mt-4">Dashboard</h5>
    <div class="row p-4">
        <div class="dashboard-box bg-primary">
            <div class="row">
                <span class="dash-box-icon">
                    <i class="fas fa-boxes text-white"></i> <span class="dash-box-title">Total Food</span>
                </span>
            </div>
            <div class="row">
                <div class="dash-box-count"><?= $totalFood ?></div>
            </div>
        </div>
        <div class="dashboard-box bg-primary">
            <div class="row">
                <span class="dash-box-icon">
                    <i class="fas fa-boxes text-white"></i> <span class="dash-box-title">Total T-shirt</span>
                </span>
            </div>
            <div class="row">
                <div class="dash-box-count"><?= $totalTshirt ?></div>
            </div>
        </div>
        <div class="dashboard-box bg-primary">
            <div class="row">
                <span class="dash-box-icon">
                    <i class="fas fa-boxes text-white"></i> <span class="dash-box-title">Total Smartphone</span>
                </span>
            </div>
            <div class="row col-sm-12">
                <div class="dash-box-count"><?= $totalSmartphone ?></div>
            </div>
        </div>
    </div>
    <div class="row p-4">
        <div class="dashboard-box bg-dark">
            <div class="row">
                <span class="dash-box-icon">
                    <i class="fas fa-boxes text-white"></i> <span class="dash-box-title">Quantity of Food</span>
                </span>
            </div>
            <div class="row">
                <div class="dash-box-count"><?= $totalQtyFood ?></div>
            </div>
        </div>
        <div class="dashboard-box bg-dark">
            <div class="row">
                <span class="dash-box-icon">
                    <i class="fas fa-boxes text-white"></i> <span class="dash-box-title">Quantity of T-shirt</span>
                </span>
            </div>
            <div class="row">
                <div class="dash-box-count"><?= $totalQtyTshirt ?></div>
            </div>
        </div>
        <div class="dashboard-box bg-dark">
            <div class="row">
                <span class="dash-box-icon">
                    <i class="fas fa-boxes text-white"></i> <span class="dash-box-title">Quantity of Smartphone</span>
                </span>
            </div>
            <div class="row col-sm-12">
                <div class="dash-box-count"><?= $totalQtySmartphone ?></div>
            </div>
        </div>
    </div>
</div>