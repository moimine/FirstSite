<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes</title>
    <style>
        table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}

.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}

.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}

.btn-danger {
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
}
    </style>
</head>
<body>
<table class="table">
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Article</th>
            <!-- <th>Description</th> -->
            <!-- <th>Status</th> -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->company->name }}</td>
                <td>{{ $order->title }}</td>
                <!-- <td>{{ $order->description }}</td> -->
                <!-- <td>{{ $order->status }}</td> -->
                <td>
                    <!-- <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary">View</a>
                    @if($order->status == 'pending') -->
                        <form action="{{ route('orders.update', $order->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="accepted">
                            <button type="submit" class="btn btn-success">Accept</button>
                        </form>
                        <form action="{{ route('orders.update', $order->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="rejected">
                            <button type="submit" class="btn btn-danger">Reject</button>
                        </form>
                    <!-- @endif -->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>