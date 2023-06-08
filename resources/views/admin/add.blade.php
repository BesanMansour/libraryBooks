@extends('admin.layout_admin');
@section('content_admin')

<!--begin::Card-->


@section('add_new')

@endsection

<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        	<h3 class="card-title">Add New Book</h3>
            	<div class="card-toolbar">
                    	<div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                     @csrf
												<div class="card-body">
													<div class="form-group mb-8">
														<div class="alert alert-custom alert-default" role="alert">
															<div class="alert-icon">
																<span class="svg-icon svg-icon-primary svg-icon-xl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
																			<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<div class="alert-text">The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.</div>
														</div>
													</div>
													<div class="form-group">
														<label for="title">عنوان الكتاب:
														<span class="text-danger">*</span></label>
                                                         <input type="text"  class="form-control" id="title" name="title" required>
    
													</div>
												
                                                    <div class="form-group">
														<label for="image">صورة الكتاب:
														<span class="text-danger">*</span></label>
                                                        <br>
                                                         <input type="file" id="image" name="image" required accept="image/*">
													</div>

													<div class="form-group">
														<label for="category_id">التصنيف:</label>
														<select class="form-control" id="category_id" name="category_id">
															<option value="">اختر التصنيف</option>
															@foreach($categories as $category)
																<option style="color: black;" value="{{ $category->id }}">{{ $category->category}} </option>
															@endforeach
														</select>
													</div>

													
                                                    <div class="form-group">
														<label for="author">اسم الكاتب:
														<span class="text-danger">*</span></label>
                                                         <input type="text"  class="form-control" id="author" name="author" required>
    
													</div>

													<div class="form-group">
														<label for="file">ملف الكتاب: <span class="text-danger">*</span></label>
														<br>
														<input type="file" id="file" name="file" required accept="*/*">
													</div>
													

                                                	<div class="form-group">
														<label for="release_date">تاريخ النشر:
														<span class="text-danger">*</span></label>
                                                         <input class="form-control" type="date" id="release_date" name="release_date" required>
    
													</div>

									
												

													<div class="form-group mb-1">
														<label for="description">وصف الكتاب:
														<span class="text-danger">*</span></label>
														<textarea class="form-control" id="description" name="description" rows="3" required></textarea>
													</div>

                                                    
                                                    <div class="form-group">
														<label for="price">السعر:
														<span class="text-danger">*</span></label>
                                                        <input type="number" class="form-control" id="price" name="price" required step="0.01">

													</div>
												</div>
												

												  <div class="text-center">
													<button type="submit" class="btn btn-primary mr-2">Submit</button>
													
													<a href="{{ route('admin.index') }}" class="btn btn-secondary">Cancel</a>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->



@endsection