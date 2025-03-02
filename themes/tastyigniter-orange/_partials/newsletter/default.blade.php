<form id="subscribeForm" class="newsletter-form" method="POST" data-request="{{ $subscribeHandler }}">
    <div class="form-group">
        <input type="email" id="subscribe_id" class="form-control" name="subscribe_email"
            placeholder="@lang('admin::lang.label_email')..." required>
    </div>
    <button id="subscribeButton" class="th-btn style6">
        <i class="fs-6 bi bi-envelope-paper-heart-fill"></i> Subscribe
    </button>
</form>