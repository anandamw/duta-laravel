@extends('admin.layouts.app')



@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Validation</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom01">Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="Enter a Name.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Fakultas <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="Your valid Fakultas.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Fakultas.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Prodi
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="Prodi" class="form-control" id="validationCustom03"
                                                placeholder="Choose a safe one.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Prodi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Domisili
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="Domisili" class="form-control" id="validationCustom03"
                                                placeholder="Choose a safe one.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Domisili.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Umur
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="Umur" class="form-control" id="validationCustom03"
                                                placeholder="Choose a safe one.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Umur.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Umur
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="Umur" class="form-control" id="validationCustom03"
                                                placeholder="Choose a safe one.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Umur.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom05">Jenis Kelamin
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <select class="default-select wide form-control" id="validationCustom05">
                                                <option data-display="Select">Please select</option>
                                                <option value="html">HTML</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a one.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Angkatan
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="Angkatan" class="form-control" id="validationCustom03"
                                                placeholder="Choose a safe one.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Angkatan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Berkas
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control" id="validationCustom03"
                                                placeholder="Choose a safe one.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Berkas.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom05">Best Skill
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <select class="default-select wide form-control" id="validationCustom05">
                                                <option data-display="Select">Please select</option>
                                                <option value="html">HTML</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a one.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom06">Currency
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="validationCustom06"
                                                placeholder="$21.60" required>
                                            <div class="invalid-feedback">
                                                Please enter a Currency.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom07">Website
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="validationCustom07"
                                                placeholder="http://example.com" required>
                                            <div class="invalid-feedback">
                                                Please enter a url.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom08">Phone (US)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="validationCustom08"
                                                placeholder="212-999-0000" required>
                                            <div class="invalid-feedback">
                                                Please enter a phone no.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom09">Digits <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="validationCustom09"
                                                placeholder="5" required>
                                            <div class="invalid-feedback">
                                                Please enter a digits.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom10">Number <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="validationCustom10"
                                                placeholder="5.0" required>
                                            <div class="invalid-feedback">
                                                Please enter a num.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom11">Range [1, 5]
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="validationCustom11"
                                                placeholder="4" required>
                                            <div class="invalid-feedback">
                                                Please select a range.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label"><a href="javascript:void(0);">Terms &amp;
                                                Conditions</a> <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="validationCustom12" required>
                                                <label class="form-check-label" for="validationCustom12">
                                                    Agree to terms and conditions
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-lg-8 ms-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
