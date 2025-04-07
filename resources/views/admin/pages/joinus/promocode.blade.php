@extends('admin.layouts.app')

@section('main-content')
    @if (session('alert'))
        <div class="alert alert-success">{{ session('alert') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp  admin-form">
                    <div class="inn-title">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <h4>Create New Promo Code</h4>
                            </div>
                        </div>
                    </div>

                    <div class="tab-inn">
                        <form action="{{ route('addPromocode') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" name="code" class="validate" required>
                                    <label>Promo Code</label>
                                </div>

                                <div class="input-field col s6">
                                    <select name="type" class="browser-default" required>
                                        <option value="" disabled selected>Choose Discount Type</option>
                                        <option value="flat">Flat</option>
                                        <option value="percent">Percent</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="number" step="0.01" name="discount" class="validate" required>
                                    <label>Discount Amount</label>
                                </div>

                                <div class="input-field col s6">
                                    <input type="datetime-local" name="expires_at" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <button type="submit" class="btn waves-effect">Save Promo Code</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Promo Code List --}}
                <div class="box-inn-sp mt-5">
                    <div class="inn-title">
                        <h4>Promo Code List</h4>
                    </div>

                    <div style="padding:7px">
                        <table class="table  table-desi">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Type</th>
                                    <th>Discount</th>
                                    <th>Expiry</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($promoCodes as $promo)
                                    <tr>
                                        <td>{{ $promo->code }}</td>
                                        <td>{{ ucfirst($promo->type) }}</td>
                                        <td>
                                            @if ($promo->type === 'percent')
                                                {{ $promo->discount }}%
                                            @else
                                                ₹{{ $promo->discount }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($promo->expires_at)
                                                {{ \Carbon\Carbon::parse($promo->expires_at)->format('d M Y H:i') }}
                                            @else
                                                Never
                                            @endif
                                        </td>
                                        
                                        <td>
                                            @if ($promo->is_active)
                                                <span class="label label-success">Active</span>
                                            @else
                                                <span class="label label-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('promo-codes.destroy', $promo->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this promo code?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="5">No Promo Codes Found</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
