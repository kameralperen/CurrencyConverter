<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Döviz Dönüştürücü</title>
</head>
<body>
    <div class="container">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Döviz Dönüşütürücü</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('currency.convert') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <select name="base_currency" class="form-select" id="base_currency">
                                @foreach ($currencies as $currency)
                                    <option value="{{ $currency }}">{{ $currency }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="target_currency" class="form-select" id="target_currency">
                                @foreach ($currencies as $currency)
                                    <option value="{{ $currency }}">{{ $currency }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Miktar:</label>
                            <input type="number" name="amount" class="form-control" id="amount" placeholder="Miktar giriniz.">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Dönüştür</button>
                    </form>

                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <strong>HATA!</strong> {{ $errors->first() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
