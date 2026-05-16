<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Fleet Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body{background:#f4f7fb}
        .fleet-shell{display:flex;min-height:100vh}
        .fleet-sidebar{width:260px;background:#07162d;color:#fff;padding:18px}
        .fleet-sidebar a{display:block;color:#dbeafe;text-decoration:none;padding:10px 12px;border-radius:10px;margin-bottom:4px}
        .fleet-sidebar a:hover{background:#12345c}
        .fleet-main{flex:1;padding:22px}
        .card{background:#fff;border-radius:14px;padding:18px;box-shadow:0 8px 24px rgba(15,23,42,.08);margin-bottom:16px}
        table{width:100%;background:#fff;border-collapse:collapse}
        th,td{padding:10px;border-bottom:1px solid #e5e7eb}
        .btn{display:inline-block;padding:8px 12px;border-radius:8px;background:#2563eb;color:#fff;text-decoration:none;border:0}
    </style>
</head>
<body>
<div class="fleet-shell">
    <aside class="fleet-sidebar">
        <h2>Fleet Management</h2>
        <a href="{{ route('admin.fleet.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.fleet.vehicles.index') }}">Vehicles</a>
        <a href="{{ route('admin.fleet.drivers.index') }}">Drivers</a>
        <a href="{{ route('admin.fleet.fuel.index') }}">Fuel</a>
        <a href="{{ route('admin.fleet.maintenance.index') }}">Maintenance</a>
        <a href="{{ route('admin.fleet.documents.index') }}">Documents</a>
        <a href="{{ route('admin.fleet.trips.index') }}">Trips</a>
        <a href="{{ route('admin.fleet.expenses.index') }}">Expenses</a>
        <a href="{{ route('admin.fleet.reports.index') }}">Reports</a>
        <a href="{{ route('admin.fleet.settings.index') }}">Settings</a>
    </aside>
    <main class="fleet-main">
        @yield('content')
    </main>
</div>
</body>
</html>
