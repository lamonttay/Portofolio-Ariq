<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyPortofolio')</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8fafc;
            color: #334155;
            line-height: 1.5;
            padding-bottom: 40px;
        }
        main {
            max-width: 900px;
            margin: 30px auto;
            background: #ffffff;
            padding: 24px 32px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        body > nav {
            background: #1e293b;
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        body > nav a {
            color: #cbd5e1;
            text-decoration: none;
            font-weight: 500;
        }
        body > nav a:hover {
            color: #ffffff;
        }
        body > nav .logo {
            font-size: 1.25rem;
            font-weight: bold;
            color: #ffffff;
        }
        body > nav ul {
            display: flex;
            gap: 16px;
            list-style: none;
        }
        nav[role="navigation"] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: transparent;
            padding: 14px 0 6px;
            margin-top: 14px;
            border-top: 1px solid #f1f5f9;
        }
        nav[role="navigation"] a,
        nav[role="navigation"] span[aria-current="page"] span,
        nav[role="navigation"] span[aria-disabled="true"] span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px 12px;
            font-size: 13px;
            font-weight: 500;
            color: #334155;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            text-decoration: none;
            margin: 0 2px;
            transition: all 0.15s ease-in-out;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        nav[role="navigation"] a:hover {
            background: #f1f5f9;
            color: #0f172a;
            border-color: #94a3b8;
        }
        nav[role="navigation"] span[aria-current="page"] span {
            background: #2563eb;
            color: #ffffff;
            border-color: #2563eb;
            font-weight: 600;
        }
        nav[role="navigation"] span[aria-disabled="true"] span {
            color: #94a3b8;
            background: #f8fafc;
            border-color: #e2e8f0;
            cursor: not-allowed;
            opacity: 0.7;
        }
        nav[role="navigation"] svg {
            width: 16px;
            height: 16px;
            display: inline-block;
            vertical-align: middle;
        }
        h1 {
            font-size: 1.5rem;
            color: #0f172a;
            margin-bottom: 16px;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 7px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            border: 1px solid transparent;
            cursor: pointer;
            transition: all 0.15s ease-in-out;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06);
            line-height: 1.25;
        }
        .btn:hover {
            opacity: 0.92;
            transform: translateY(-1px);
            box-shadow: 0 3px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .btn:active {
            transform: translateY(0);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06);
        }
        .btn-primary {
            background: #2563eb;
            color: #ffffff;
            border-color: #1d4ed8;
        }
        .btn-secondary {
            background: #f1f5f9;
            color: #334155;
            border-color: #cbd5e1;
        }
        .btn-secondary:hover {
            background: #e2e8f0;
            color: #0f172a;
        }
        .btn-warning {
            background: #f59e0b;
            color: #ffffff;
            border-color: #d97706;
        }
        .btn-danger {
            background: #ef4444;
            color: #ffffff;
            border-color: #dc2626;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
        }
        th, td {
            padding: 10px 12px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
        }
        th {
            background-color: #f1f5f9;
            font-weight: 600;
            color: #475569;
        }
        tr:hover {
            background-color: #f8fafc;
        }
        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 16px;
        }
        .alert-danger {
            background: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 16px;
        }
        .form-group {
            margin-bottom: 16px;
        }
        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
        }
        .form-control {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
        }
        .form-control:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.1);
        }
        footer {
            text-align: center;
            color: #94a3b8;
            font-size: 14px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
