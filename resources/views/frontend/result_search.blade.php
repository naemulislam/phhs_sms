@extends('frontend.layout.master')
@section('title', 'Result Search')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>ব্যক্তিগত ফলাফল</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 mx-auto">
                                <form action="{{ route('fornt.result.search.find') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>শ্রেণি সমূহ <span class="text-danger">*</span></label>
                                        <select class="form-control" name="group_id" id="">
                                            <option selected="" disabled="">শ্রেণি নির্বাচন করুন</option>
                                            @foreach ($groups as $group)
                                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('group_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>পরিক্ষার সন <span class="text-danger">*</span></label>
                                        <select class="form-control" name="year">
                                            <option selected="" disabled="">পরিক্ষার সন নির্বাচন করুন</option>
                                            @foreach ($years as $year)
                                                <option value="{{ $year->year }}">{{ $year->year }}</option>
                                            @endforeach
                                        </select>
                                        @error('year')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>পরিক্ষার ধরন <span class="text-danger">*</span></label>
                                        <select class="form-control" name="exam_type">
                                            <option selected="" disabled="">পরিক্ষার ধরন নির্বাচন করুন</option>
                                            <option value="Half yearly examination">অর্ধবার্ষিক পরীক্ষা</option>
                                            <option value="Annual examination">বার্ষিক পরীক্ষা</option>
                                            <option value="Class test examination">ক্লাস টেস্ট পরীক্ষা</option>
                                        </select>
                                        @error('exam_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>রোল নং <span class="text-danger">*</span></label>
                                        <input type="number" name="roll" class="form-control" placeholder="রোল নং">
                                        @error('roll')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-info form-control" type="submit">সার্চ করুন</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
