    <div class="shop-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="shop-detail__slider">
                        <div class="shop-detail__main-slider">
                            <label class="upload__image d-flex flex-column align-items-center justify-content-center">
                                <img class="upload__image--icon" src="img/svg/upload-icon.svg" alt="">
                                <div class="upload__image--text regular d-flex flex-column align-items-center">
                                    <p>Drop Images to upload</p> 
                                    <p>or</p>
                                </div>
                                <input 
                                    type="file" 
                                    class="upload__image--input h-roman"
                                    onchange="fileUploadImage(this, value)">
                                <img src="" alt="" class="upload__image--uploaded">
                                <div class="upload__image--btn regular">Browse</div>
                            </label>
                        </div>
                        <div class="shop-detail__mini-slider upload__image--mini d-flex align-items-center">
                        <div class="shop-detail__mini-slider--cover upload__image--upload d-flex align-items-center justify-content-center">
                                <label class="upload__image d-flex flex-column align-items-center justify-content-center">
                                    <img class="upload__image--icon" src="img/svg/upload-icon.svg" alt="">
                                    <input 
                                        type="file" 
                                        class="upload__image--input h-roman"
                                        onchange="fileUploadImage(this, value)">
                                    <img src="" alt="" class="upload__image--uploaded">
                                </label>
                                <div class="upload__image--btn-footer d-flex justify-content-between align-items-center">
                                    <input type="radio" value="1" class="radio-on-img">
                                    <button class="products-slider__item--fav upload__image--btn-delete buttons-on-image-upload"><img src="img/svg/trash.svg" class="trash-on-image-upload" alt=""></button>
                                </div>
                            </div>
                            <div class="shop-detail__mini-slider--cover upload__image--upload d-flex align-items-center justify-content-center">
                                <label class="upload__image d-flex flex-column align-items-center justify-content-center">
                                    <img class="upload__image--icon" src="img/svg/upload-icon.svg" alt="">
                                    <input 
                                        type="file" 
                                        class="upload__image--input h-roman"
                                        onchange="fileUploadImage(this, value)">
                                    <img src="" alt="" class="upload__image--uploaded">
                                </label>
                                <div class="upload__image--btn-footer d-flex justify-content-between align-items-center">
                                    <input type="radio" value="1" class="radio-on-img">
                                    <button class="products-slider__item--fav upload__image--btn-delete buttons-on-image-upload"><img src="img/svg/trash.svg" class="trash-on-image-upload" alt=""></button>
                                </div>
                            </div>
                            <div class="shop-detail__mini-slider--cover upload__image--upload d-flex align-items-center justify-content-center">
                                <label class="upload__image d-flex flex-column align-items-center justify-content-center">
                                    <img class="upload__image--icon" src="img/svg/upload-icon.svg" alt="">
                                    <input 
                                        type="file" 
                                        class="upload__image--input h-roman"
                                        onchange="fileUploadImage(this, value)">
                                    <img src="" alt="" class="upload__image--uploaded">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="shop-detail__info">
                        <ul class="page__navigation--links d-none d-lg-flex">
                            <li class="page__navigation--link regular">
                                <a href="">Home</a>
                            </li>
                            <li class="page__navigation--link regular">
                                >
                                <a href="">Home</a>
                            </li>
                        </ul>
                        <h1 class="shop-detail__info--title bold d-none d-lg-block">Upload product</h1>
                        <div class="row">
                            <div class="col-12">
                                <div class="upload">
                                    <div class="upload__body-mobile">
                                        <div class="upload__head--menu-mobile regular">
                                            <div class="upload-product-tab-mobile" data-tab="0"><span class="tab-number">1</span> Listing Details</div>
                                            <div class="upload__body--tab-mobile" data-tab="0">
                                                <div class="col-12">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title product-upload-titles regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Title Eng
                                                        </span>
                                                        <input type="text" class="cart-order__form--input regular" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title regular product-upload-titles">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Title Geo
                                                        </span>
                                                        <input type="text" class="cart-order__form--input regular" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-3 selects-inproduct-upload">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title product-upload-titles regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            End Date
                                                        </span>
                                                        <input type="date" class="cart-order__form--input regular" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-12" style="margin-top: 48px;">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title product-upload-titles regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Categories
                                                        </span>
                                                        <div class="product-upload__categories">
                                                            <p class="regular">Choose Category</p>
                                                            <img src="img/svg/header-btn/arrow.svg" alt="down"/>
                                                        </div>
                                                        <div class="dropdown-container product-upload-add-categories d-none">
    
                                                            <button type="button" class="regular prev-categories">
                                                                <img src="img/svg/header-btn/arrow.svg" class="color-blue" alt="">
                                                                <p class="color-blue">Back</p>
                                                            </button>
                                                            <ul class="categories-list regular">
                                                                <li>
                                                                    product 1
                                                                </li>
                                                                <li>
                                                                    product 2
                                                                </li>
                                                                <li>
                                                                    product 3
                                                                </li>
                                                                <li>
                                                                    product 4
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12" style="margin-top: 24px;">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title product-upload-titles regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Tags
                                                        </span>
                                                        <div class="product-upload__tags">
                                                            <p class="regular" style="display: none;">Choose Tags</p>
                                                            <ul class="selected-tags">
                                                                <li>
                                                                    <p class="tag-name">Anniversary</p>
                                                                    <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                                </li>
                                                                <li>
                                                                    <p class="tag-name">Christmas & Winter</p>
                                                                    <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                                </li>
                                                                <li>
                                                                    <p class="tag-name">Birthday</p>
                                                                    <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                                </li>
                                                                <li>
                                                                    <p class="tag-name">Anniversary</p>
                                                                    <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                                </li>
                                                                <li>
                                                                    <p class="tag-name">Christmas & Winter</p>
                                                                    <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                                </li>
                                                                <li>
                                                                    <p class="tag-name">Birthday</p>
                                                                    <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                                </li>
                                                            </ul>
                                                            <img src="img/svg/header-btn/arrow.svg" alt="down"/>
                                                        </div>
                                                        <div class="dropdown-container product-upload-add-tags">
                                                            <ul class="tags-list regular">
                                                                <li>
                                                                    <label class="element__check d-flex align-items-center">
                                                                        <div>
                                                                            <input type="checkbox" class="element__check--input">
                                                                            <span class="element__check--checked">
                                                                                <img src="./img/svg/checked.svg" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <span class="element__check--text regular">
                                                                            tag 1
                                                                        </span>
                                                                    </label><!-- end -->
                                                                </li>
                                                                <li>
                                                                    <label class="element__check d-flex align-items-center">
                                                                        <div>
                                                                            <input type="checkbox" class="element__check--input">
                                                                            <span class="element__check--checked">
                                                                                <img src="./img/svg/checked.svg" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <span class="element__check--text regular">
                                                                            tag 2
                                                                        </span>
                                                                    </label><!-- end -->
                                                                </li>
                                                                <li>
                                                                    <label class="element__check d-flex align-items-center">
                                                                        <div>
                                                                            <input type="checkbox" class="element__check--input">
                                                                            <span class="element__check--checked">
                                                                                <img src="./img/svg/checked.svg" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <span class="element__check--text regular">
                                                                            tag 3
                                                                        </span>
                                                                    </label><!-- end -->
                                                                </li>
                                                                <li>
                                                                    <label class="element__check d-flex align-items-center">
                                                                        <div>
                                                                            <input type="checkbox" class="element__check--input">
                                                                            <span class="element__check--checked">
                                                                                <img src="./img/svg/checked.svg" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <span class="element__check--text regular">
                                                                            tag 4
                                                                        </span>
                                                                    </label><!-- end -->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end -->
                                        </div>
                                        <div class="upload__head--menu-mobile regular current-mobile-tab">
                                            <div class="upload-product-tab-mobile active-tab-head" data-tab="0"><span class="tab-number">2</span> Listing Details</div>
                                            <div class="upload__body--tab-mobile active-mobile-tab" data-tab="1">
                                                <div class="col-3" style="width: 197px">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Condition
                                                        </span>
                                                        <select class="select__list regular selects-inproduct-upload" name>
                                                            <option value="new">New</option>
                                                            <option value="opt1">Opt1</option>
                                                            <option value="opt2">Opt2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-3" style="width: 197px">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Manufacturing year
                                                        </span>
                                                        <select class="select__list regular selects-inproduct-upload" name>
                                                            <option value="new">New</option>
                                                            <option value="opt1">Opt1</option>
                                                            <option value="opt2">Opt2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-3" style="width: 197px">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Brand
                                                        </span>
                                                        <select class="select__list regular selects-inproduct-upload" name>
                                                            <option value="new">New</option>
                                                            <option value="opt1">Opt1</option>
                                                            <option value="opt2">Opt2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-3" style="width: 197px">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Currency
                                                        </span>
                                                        <select class="select__list selects-inproduct-upload regular" name>
                                                            <option value="new">New</option>
                                                            <option value="opt1">Opt1</option>
                                                            <option value="opt2">Opt2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="cart-order__form--product-characteristics">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="bold title">Product Charasteristics</p>
                                                        <button class="remove-charasteristic-btn">
                                                            <img src="img/svg/trash.svg" class="remove-charasteristic" alt="trash" />
                                                        </button>
                                                    </div>
                                                    <div class="form-field">
                                                        <div class="cart-order__form--label">
                                                            <span class="cart-order__form--title regular">
                                                                Charasterics 1
                                                            </span>
                                                            <div class="d-flex align-items-center">
                                                                <input type="text" class="cart-order__form--input regular selects-inproduct-upload" placeholder="">
                                                                <input type="checkbox" name="check" class="checkboxes" style="margin-left: 20px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field">
                                                        <div class="cart-order__form--label">
                                                            <span class="cart-order__form--title regular">
                                                                Charasterics 2
                                                            </span>
                                                            <div class="d-flex align-items-center">
                                                                <input type="text" class="cart-order__form--input regular selects-inproduct-upload" placeholder="">
                                                                <input type="checkbox" name="check" class="checkboxes" style="margin-left: 20px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field">
                                                        <div class="cart-order__form--label">
                                                            <span class="cart-order__form--title regular">
                                                                <img src="img/svg/red-union.svg" alt="">
                                                                Charasterics 3
                                                            </span>
                                                            <div class="d-flex align-items-center">
                                                                <input type="text" class="cart-order__form--input regular selects-inproduct-upload" placeholder="">
                                                                <input type="checkbox" name="check" class="checkboxes" style="margin-left: 20px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="add-product-option">+ Add Other Product Option</button>
                                                <div class="product-description-container">
                                                    <span class="product-description-title regular">Product Description Eng</span>
                                                    <textarea name="productDescription" class="product-description regular product-upload__descriptions" rows="10"></textarea>
                                                </div>
                                                <div class="product-description-container">
                                                    <span class="product-description-title regular">Product Description Eng</span>
                                                    <textarea name="productDescription" class="product-description regular product-upload__descriptions" rows="10"></textarea>
                                                </div>
                                                <div class="product-description-container">
                                                    <span class="product-description-title regular">Product Description Eng</span>
                                                    <textarea name="productDescription" class="product-description regular product-upload__descriptions" rows="10"></textarea>
                                                </div>
                                                <div class="product-description-container">
                                                    <span class="product-description-title regular">Product Description Eng</span>
                                                    <textarea name="productDescription" class="product-description regular product-upload__descriptions" rows="10"></textarea>
                                                </div>
                                            </div><!-- end -->
                                        </div>
                                        <div class="upload__head--menu-mobile regular">
                                            <div class="upload-product-tab-mobile" data-tab="0"><span class="tab-number">3</span> Listing Details</div>
                                            <div class="upload__body--tab-mobile tab-start" data-tab="2">
                                                <span class="cart-order__form--title regular">
                                                    <img src="img/svg/red-union.svg" alt="">
                                                    Default Details
                                                </span>
                                                <div class="row choose-delivery-type">
                                                    <div class="col-md-3">
                                                        <label class="element__check d-flex align-items-center">
                                                            <div>
                                                                <input type="checkbox" class="element__check--input">
                                                                <span class="element__check--checked">
                                                                    <img src="./img/svg/checked.svg" alt="">
                                                                </span>
                                                            </div>
                                                            <span class="element__check--text regular">
                                                                Georgian Post
                                                            </span>
                                                        </label><!-- end -->
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="element__check d-flex align-items-center">
                                                            <div>
                                                                <input type="checkbox" class="element__check--input">
                                                                <span class="element__check--checked">
                                                                    <img src="./img/svg/checked.svg" alt="">
                                                                </span>
                                                            </div>
                                                            <span class="element__check--text regular">
                                                                Own Delivery
                                                            </span>
                                                        </label><!-- end -->
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="element__check d-flex align-items-center">
                                                            <div>
                                                                <input type="checkbox" class="element__check--input">
                                                                <span class="element__check--checked">
                                                                    <img src="./img/svg/checked.svg" alt="">
                                                                </span>
                                                            </div>
                                                            <span class="element__check--text regular">
                                                                Pick up
                                                            </span>
                                                        </label><!-- end -->
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center default-values">
                                                    <p class="bold">Pink / 40 mm / 32 gb</p>
                                                    <p class="regular">Default Values</p>
                                                </div>
                                                <div class="row item-info-container">
                                                    <div class="col-md-4">
                                                        <label class="cart-order__form--label mt-0">
                                                            <p class="cart-order__form--title regular item-info-title">
                                                                <img src="img/svg/red-union.svg" alt="">
                                                                Item Location
                                                            </p>
                                                            <select class="select__list selects-inproduct-upload regular item-info" name style="width: 100%; height: 48px;">
                                                                <option value="new">Choose Address</option>
                                                                <option value="opt1">Opt1</option>
                                                                <option value="opt2">Opt2</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="contact-page__form--label mt-0">
                                                            <p class="cart-order__form--title item-info-title regular">
                                                                <img src="img/svg/red-union.svg" alt="">
                                                                Shipping Weight (kg)
                                                            </p>
                                                            <input type="text" class="contact-page__form--input item-info" style="width: 100%; height: 48px;" >
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="contact-page__form--label mt-0">
                                                            <p class="cart-order__form--title item-info-title regular">
                                                                <img src="img/svg/red-union.svg" alt="">
                                                                Length (mm) / Width (mm) / Height (mm)
                                                            </p>
                                                            <div class="item-size-details">
                                                                <input type="text" class="item-size-detail-inputs">
                                                                <span class="item-size-detail-inputs-divider">/</span>
                                                                <input type="text" class="item-size-detail-inputs">
                                                                <span class="item-size-detail-inputs-divider">/</span>
                                                                <input type="text" class="item-size-detail-inputs">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="contact-page__form--label mt-0">
                                                            <p class="cart-order__form--title item-info-title regular">
                                                                <img src="img/svg/red-union.svg" alt="">
                                                                Quantity
                                                            </p>
                                                            <input type="text" class="contact-page__form--input item-info" style="width: 100%;" >
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="contact-page__form--label mt-0">
                                                            <p class="cart-order__form--title item-info-title regular">
                                                                <img src="img/svg/red-union.svg" alt="">
                                                                Own Delivery Cost
                                                            </p>
                                                            <input type="text" class="contact-page__form--input item-info" style="width: 100%; height: 48px;" >
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="contact-page__form--label mt-0 option-photo-container">
                                                            <p class="cart-order__form--title item-info-title regular">
                                                                Option Photo
                                                            </p>
                                                            <div class="option-photo-actions">
                                                                <input type="file" name="photo" id="upload-option-photo" class="d-none">
                                                                <label for="upload-option-photo" class="upload-option-photo">
                                                                    <img src="img/svg/upload-icon.svg" class="convert-svg" alt="upload"/>
                                                                </label>
                                                                <button class="remove-option-photo-btn">
                                                                    <img src="img/svg/trash.svg" class="remove-option-photo" alt="trash" />
                                                                </button>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div><!-- end -->
                                        </div>
                                        <div class="upload__head--menu-mobile regular">
                                            <div class="upload-product-tab-mobile" data-tab="0"><span class="tab-number">4</span> Listing Details</div>
                                            <div class="upload__body--tab-mobile" data-tab="3">
                                                <div class="col-md-4">
                                                    <label class="contact-page__form--label tab-start mt-0">
                                                        <p class="cart-order__form--title regular ">
                                                            Donation %
                                                        </p>
                                                        <input type="text" class="contact-page__form--input" style="width: 100%;" >
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="contact-page__form--label">
                                                        <p class="cart-order__form--title regular">
                                                            Donate to
                                                        </p>
                                                        <div class="donate-to-options">
                                                            <div class="d-flex align-items-center">
                                                                <input type="radio" value="1" id="donate-to-charity" name="donate-to" class="radio-on-img">
                                                                <label for="donate-to-charity" class="regular donate-to-label">Charity</label>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <input type="radio" value="1" id="donate-to-social-program" name="donate-to" class="radio-on-img">
                                                                <label for="donate-to-social-program" class="regular donate-to-label">Social Program</label>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="select">
                                                        <p class="cart-order__form--title regular">
                                                            Beneficiary
                                                        </p>
                                                        <select name="" id="" class="select__list regular" style="height: 48px;">
                                                            <option value="" class="select__list--item">Choose Charity</option>
                                                            <option value="" class="select__list--item">erti</option>
                                                            <option value="" class="select__list--item">ori</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end -->
                                            </div><!-- end -->
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div id="prevBtn">
                                                    <button type="button" class="upload__body--prev bold" style="width: 100%;" onclick="nextPrev(-1)">Previous</button>
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top: 16px;">
                                                <div id="nextBtn">
                                                    <button type="button" class="upload__body--next bold" style="width: 100%;" id="nextBtnText" onclick="nextPrev(1)">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 16px;">
                                            <div class="col-6">
                                                <button class="cart-order__body--btn cart-order__body--blue bold" style="width: 100%; margin: 0; padding: 0">Save as draft</button>
                                            </div>
                                            <div class="col-6">
                                                <button class="cart-order__form--btn bold">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="upload__head d-flex desktop-tabs-list">
                                        <div class="upload__head--menu regular active" data-tab="0">
                                            Listing Details
                                        </div><!-- end -->
                                        <div class="upload__head--menu regular" data-tab="1">
                                            Selling Details
                                        </div><!-- end -->
                                        <div class="upload__head--menu regular" data-tab="2">
                                            Shipping Deatils
                                        </div><!-- end -->
                                        <div class="upload__head--menu regular" data-tab="3">
                                            Make Donation
                                        </div><!-- end -->
                                    </div><!-- head end -->
                                    <form class="upload__body desktop-tabs">
                                        <div class="upload__body--tab" data-tab="0" style="display: none;">
                                            <div class="col-12">
                                                <div class="cart-order__form--label">
                                                    <span class="cart-order__form--title product-upload-titles regular">
                                                        <img src="img/svg/red-union.svg" alt="">
                                                        Title Eng
                                                    </span>
                                                    <input type="text" class="cart-order__form--input regular" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="cart-order__form--label">
                                                    <span class="cart-order__form--title regular product-upload-titles">
                                                        <img src="img/svg/red-union.svg" alt="">
                                                        Title Geo
                                                    </span>
                                                    <input type="text" class="cart-order__form--input regular" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-3 selects-inproduct-upload">
                                                <div class="cart-order__form--label">
                                                    <span class="cart-order__form--title product-upload-titles regular">
                                                        <img src="img/svg/red-union.svg" alt="">
                                                        End Date
                                                    </span>
                                                    <input type="date" class="cart-order__form--input regular" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top: 48px;">
                                                <div class="cart-order__form--label">
                                                    <span class="cart-order__form--title product-upload-titles regular">
                                                        <img src="img/svg/red-union.svg" alt="">
                                                        Categories
                                                    </span>
                                                    <div class="product-upload__categories">
                                                        <p class="regular">Choose Category</p>
                                                        <img src="img/svg/header-btn/arrow.svg" alt="down"/>
                                                    </div>
                                                    <div class="dropdown-container product-upload-add-categories d-none">

                                                        <button type="button" class="regular prev-categories">
                                                            <img src="img/svg/header-btn/arrow.svg" class="color-blue" alt="">
                                                            <p class="color-blue">Back</p>
                                                        </button>
                                                        <ul class="categories-list regular">
                                                            <li>
                                                                product 1
                                                            </li>
                                                            <li>
                                                                product 2
                                                            </li>
                                                            <li>
                                                                product 3
                                                            </li>
                                                            <li>
                                                                product 4
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top: 24px;">
                                                <div class="cart-order__form--label">
                                                    <span class="cart-order__form--title product-upload-titles regular">
                                                        <img src="img/svg/red-union.svg" alt="">
                                                        Tags
                                                    </span>
                                                    <div class="product-upload__tags">
                                                        <p class="regular" style="display: none;">Choose Tags</p>
                                                        <ul class="selected-tags">
                                                            <li>
                                                                <p class="tag-name">Anniversary</p>
                                                                <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                            </li>
                                                            <li>
                                                                <p class="tag-name">Christmas & Winter</p>
                                                                <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                            </li>
                                                            <li>
                                                                <p class="tag-name">Birthday</p>
                                                                <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                            </li>
                                                            <li>
                                                                <p class="tag-name">Anniversary</p>
                                                                <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                            </li>
                                                            <li>
                                                                <p class="tag-name">Christmas & Winter</p>
                                                                <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                            </li>
                                                            <li>
                                                                <p class="tag-name">Birthday</p>
                                                                <img src="img/svg/popup-close.svg" class="remove-tag" alt="">
                                                            </li>
                                                        </ul>
                                                        <img src="img/svg/header-btn/arrow.svg" alt="down"/>
                                                    </div>
                                                    <div class="dropdown-container product-upload-add-tags">
                                                        <ul class="tags-list regular">
                                                            <li>
                                                                <label class="element__check d-flex align-items-center">
                                                                    <div>
                                                                        <input type="checkbox" class="element__check--input">
                                                                        <span class="element__check--checked">
                                                                            <img src="./img/svg/checked.svg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <span class="element__check--text regular">
                                                                        tag 1
                                                                    </span>
                                                                </label><!-- end -->
                                                            </li>
                                                            <li>
                                                                <label class="element__check d-flex align-items-center">
                                                                    <div>
                                                                        <input type="checkbox" class="element__check--input">
                                                                        <span class="element__check--checked">
                                                                            <img src="./img/svg/checked.svg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <span class="element__check--text regular">
                                                                        tag 2
                                                                    </span>
                                                                </label><!-- end -->
                                                            </li>
                                                            <li>
                                                                <label class="element__check d-flex align-items-center">
                                                                    <div>
                                                                        <input type="checkbox" class="element__check--input">
                                                                        <span class="element__check--checked">
                                                                            <img src="./img/svg/checked.svg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <span class="element__check--text regular">
                                                                        tag 3
                                                                    </span>
                                                                </label><!-- end -->
                                                            </li>
                                                            <li>
                                                                <label class="element__check d-flex align-items-center">
                                                                    <div>
                                                                        <input type="checkbox" class="element__check--input">
                                                                        <span class="element__check--checked">
                                                                            <img src="./img/svg/checked.svg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <span class="element__check--text regular">
                                                                        tag 4
                                                                    </span>
                                                                </label><!-- end -->
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end -->
                                        <div class="upload__body--tab" data-tab="1" style="display: none;">
                                            <div class="col-3" style="width: 197px">
                                                <div class="cart-order__form--label">
                                                    <span class="cart-order__form--title regular">
                                                        <img src="img/svg/red-union.svg" alt="">
                                                        Condition
                                                    </span>
                                                    <select class="select__list regular selects-inproduct-upload" name>
                                                        <option value="new">New</option>
                                                        <option value="opt1">Opt1</option>
                                                        <option value="opt2">Opt2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3" style="width: 197px">
                                                <div class="cart-order__form--label">
                                                    <span class="cart-order__form--title regular">
                                                        <img src="img/svg/red-union.svg" alt="">
                                                        Manufacturing year
                                                    </span>
                                                    <select class="select__list regular selects-inproduct-upload" name>
                                                        <option value="new">2020</option>
                                                        <option value="opt1">Opt1</option>
                                                        <option value="opt2">Opt2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3" style="width: 197px">
                                                <div class="cart-order__form--label">
                                                    <span class="cart-order__form--title regular">
                                                        <img src="img/svg/red-union.svg" alt="">
                                                        Brand
                                                    </span>
                                                    <select class="select__list regular selects-inproduct-upload" name>
                                                        <option value="new">Name</option>
                                                        <option value="opt1">Opt1</option>
                                                        <option value="opt2">Opt2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3" style="width: 197px">
                                                <div class="cart-order__form--label">
                                                    <span class="cart-order__form--title regular">
                                                        <img src="img/svg/red-union.svg" alt="">
                                                        Currency
                                                    </span>
                                                    <select class="select__list selects-inproduct-upload regular" name>
                                                        <option value="new">Gel</option>
                                                        <option value="opt1">Opt1</option>
                                                        <option value="opt2">Opt2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="cart-order__form--product-characteristics">
                                                <div class="d-flex justify-content-between">
                                                    <p class="bold title">Product Charasteristics</p>
                                                    <button class="remove-charasteristic-btn">
                                                        <img src="img/svg/trash.svg" class="remove-charasteristic" alt="trash" />
                                                    </button>
                                                </div>
                                                <div class="form-field">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title regular">
                                                            Charasterics 1
                                                        </span>
                                                        <div class="d-flex align-items-center">
                                                            <input type="text" class="cart-order__form--input regular selects-inproduct-upload" placeholder="">
                                                            <input type="checkbox" name="check" class="checkboxes" style="margin-left: 20px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-field">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title regular">
                                                            Charasterics 2
                                                        </span>
                                                        <div class="d-flex align-items-center">
                                                            <input type="text" class="cart-order__form--input regular selects-inproduct-upload" placeholder="">
                                                            <input type="checkbox" name="check" class="checkboxes" style="margin-left: 20px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-field">
                                                    <div class="cart-order__form--label">
                                                        <span class="cart-order__form--title regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Charasterics 3
                                                        </span>
                                                        <div class="d-flex align-items-center">
                                                            <input type="text" class="cart-order__form--input regular selects-inproduct-upload" placeholder="">
                                                            <input type="checkbox" name="check" class="checkboxes" style="margin-left: 20px">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="add-product-option">+ Add Other Product Option</button>
                                            <div class="product-description-container">
                                                <span class="product-description-title regular">Product Description Eng</span>
                                                <textarea name="productDescription" class="product-description regular product-upload__descriptions" rows="10"></textarea>
                                            </div>
                                            <div class="product-description-container">
                                                <span class="product-description-title regular">Product Description Geo</span>
                                                <textarea name="productDescription" class="product-description regular product-upload__descriptions" rows="10"></textarea>
                                            </div>
                                            <div class="product-description-container">
                                                <span class="product-description-title regular">Product Description Eng</span>
                                                <textarea name="productDescription" class="product-description regular product-upload__descriptions" rows="10"></textarea>
                                            </div>
                                            <div class="product-description-container">
                                                <span class="product-description-title regular">Product Description Geo</span>
                                                <textarea name="productDescription" class="product-description regular product-upload__descriptions" rows="10"></textarea>
                                            </div>
                                        </div><!-- end -->
                                        <div class="upload__body--tab tab-start" data-tab="2" style="display: none;">
                                            <span class="cart-order__form--title regular">
                                                <img src="img/svg/red-union.svg" alt="">
                                                Default Details
                                            </span>
                                            <div class="row choose-delivery-type">
                                                <div class="col-md-3">
                                                    <label class="element__check d-flex align-items-center">
                                                        <div>
                                                            <input type="checkbox" class="element__check--input">
                                                            <span class="element__check--checked">
                                                                <img src="./img/svg/checked.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <span class="element__check--text regular">
                                                            Georgian Post
                                                        </span>
                                                    </label><!-- end -->
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="element__check d-flex align-items-center">
                                                        <div>
                                                            <input type="checkbox" class="element__check--input">
                                                            <span class="element__check--checked">
                                                                <img src="./img/svg/checked.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <span class="element__check--text regular">
                                                            Own Delivery
                                                        </span>
                                                    </label><!-- end -->
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="element__check d-flex align-items-center">
                                                        <div>
                                                            <input type="checkbox" class="element__check--input">
                                                            <span class="element__check--checked">
                                                                <img src="./img/svg/checked.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <span class="element__check--text regular">
                                                            Pick up
                                                        </span>
                                                    </label><!-- end -->
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center default-values">
                                                <p class="bold">Pink / 40 mm / 32 gb</p>
                                                <p class="regular">Default Values</p>
                                            </div>
                                            <div class="row item-info-container">
                                                <div class="col-md-4">
                                                    <label class="cart-order__form--label mt-0">
                                                        <p class="cart-order__form--title regular item-info-title">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Item Location
                                                        </p>
                                                        <select class="select__list selects-inproduct-upload regular item-info" name style="width: 100%; height: 48px;">
                                                            <option value="new">Choose Address</option>
                                                            <option value="opt1">Opt1</option>
                                                            <option value="opt2">Opt2</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="contact-page__form--label mt-0">
                                                        <p class="cart-order__form--title item-info-title regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Shipping Weight (kg)
                                                        </p>
                                                        <input type="text" class="contact-page__form--input item-info" style="width: 100%; height: 48px;" >
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="contact-page__form--label mt-0">
                                                        <p class="cart-order__form--title item-info-title regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Length (mm) / Width (mm) / Height (mm)
                                                        </p>
                                                        <div class="item-size-details">
                                                            <input type="text" class="item-size-detail-inputs">
                                                            <span class="item-size-detail-inputs-divider">/</span>
                                                            <input type="text" class="item-size-detail-inputs">
                                                            <span class="item-size-detail-inputs-divider">/</span>
                                                            <input type="text" class="item-size-detail-inputs">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="contact-page__form--label mt-0">
                                                        <p class="cart-order__form--title item-info-title regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Quantity
                                                        </p>
                                                        <input type="text" class="contact-page__form--input item-info" style="width: 100%;" >
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="contact-page__form--label mt-0">
                                                        <p class="cart-order__form--title item-info-title regular">
                                                            <img src="img/svg/red-union.svg" alt="">
                                                            Own Delivery Cost
                                                        </p>
                                                        <input type="text" class="contact-page__form--input item-info" style="width: 100%; height: 48px;" >
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="contact-page__form--label mt-0 option-photo-container">
                                                        <p class="cart-order__form--title item-info-title regular">
                                                            Option Photo
                                                        </p>
                                                        <div class="option-photo-actions">
                                                            <input type="file" name="photo" id="upload-option-photo" class="d-none">
                                                            <label for="upload-option-photo" class="upload-option-photo">
                                                                <img src="img/svg/upload-icon-small.svg" class="convert-svg" alt="upload"/>
                                                            </label>
                                                            <button class="remove-option-photo-btn">
                                                                <img src="img/svg/trash.svg" class="remove-option-photo" alt="trash" />
                                                            </button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div><!-- end -->
                                        <div class="upload__body--tab" data-tab="3" style="display: none;">
                                            <div class="col-md-4">
                                                <label class="contact-page__form--label tab-start mt-0">
                                                    <p class="cart-order__form--title regular ">
                                                        Donation %
                                                    </p>
                                                    <input type="text" class="contact-page__form--input" style="width: 100%;" >
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="contact-page__form--label">
                                                    <p class="cart-order__form--title regular">
                                                        Donate to
                                                    </p>
                                                    <div class="donate-to-options">
                                                        <div class="d-flex align-items-center">
                                                            <input type="radio" value="1" id="donate-to-charity" name="donate-to" class="radio-on-img">
                                                            <label for="donate-to-charity" class="regular donate-to-label">Charity</label>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <input type="radio" value="1" id="donate-to-social-program" name="donate-to" class="radio-on-img">
                                                            <label for="donate-to-social-program" class="regular donate-to-label">Social Program</label>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="select">
                                                    <p class="cart-order__form--title regular">
                                                        Beneficiary
                                                    </p>
                                                    <select name="" id="" class="select__list regular" style="height: 48px;">
                                                        <option value="" class="select__list--item">Choose Charity</option>
                                                        <option value="" class="select__list--item">erti</option>
                                                        <option value="" class="select__list--item">ori</option>
                                                    </select>
                                                </div>
                                            </div><!-- end -->
                                        </div><!-- end -->
    
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="d-flex justify-content-between">
                                                    <div id="prevBtn">
                                                        <button type="button" class="upload__body--prev bold prev-next-pages-btn" onclick="nextPrev(-1)">Previous</button>
                                                    </div>
                                                    <div id="nextBtn">
                                                        <button type="button" class="upload__body--next bold prev-next-pages-btn" id="nextBtnText" onclick="nextPrev(1)">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="d-flex justify-content-end">
                                                    <button class="cart-order__body--btn cart-order__body--blue bold save-as-draft-desktop">Save as draft</button>
                                                    <button class="cart-order__form--btn bold">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="upload__draft-list">
                                    <div class="upload__draft-list--item row">
                                        <div class="col-8">
                                            <h1 class="upload__draft-list--title align-items-center regular">
                                                Draft: iPhone XS Max, 64GB, Arctic White, asdas safasd 
                                            </h1>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span class="upload__draft-list--date regular">27/04/2021 13:27</span>
                                                <button class="upload__draft-list--delete">
                                                    <img src="img/svg/trash.svg" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div><!-- item end -->
                                    <div class="upload__draft-list--item row">
                                        <div class="col-8">
                                            <h1 class="upload__draft-list--title align-items-center regular">
                                                Draft: iPhone XS Max, 64GB, Arctic White, asdas safasd 
                                            </h1>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span class="upload__draft-list--date regular">27/04/2021 13:27</span>
                                                <button class="upload__draft-list--delete">
                                                    <img src="img/svg/trash.svg" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div><!-- item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>















    <script defer>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("upload__body--tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "flex";
            }
            //   if (n == (x.length - 1)) {
            //     document.getElementById("nextBtnText").innerHTML = "Submit";
            //   } else {
            //     document.getElementById("nextBtnText").innerHTML = "Next";
            //   }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }
    
        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("upload__body--tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementsByClassName("upload__body").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }
        
        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("upload__body--tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                // ეს ქვედა კომენტარი გამოიყენება შემოწმებისას... 
                // if (y[i].value == "") 
                if (y[i].value == true) {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
                }
            }
        // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("upload__head--menu")[currentTab].classList.add("finish");
            }
        return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("upload__head--menu");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].classList.add("active");
        }
        
    </script>
