<?php
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

// Faq Manager
Breadcrumbs::for('Faq', function ($trail) {
    $trail->parent('home');
    $trail->push('Faq', route('admin.faqs'));
});
Breadcrumbs::for('FaqAdd', function ($trail) {
    $trail->parent('Faq');
    $trail->push('Add', route('faq.create'));
});
Breadcrumbs::for('FaqEdit', function ($trail) {
    $trail->parent('Faq');
    $trail->push('Edit',  url('faq/edit/{id}'));
});
Breadcrumbs::for('viewFaq', function ($trail) {
    $trail->parent('Faq');
    $trail->push('Details', url('faq/show/{id}'));
});

//Page Manager
Breadcrumbs::for('Page', function ($trail) {
    $trail->parent('home');
    $trail->push('Page', route('admin.pages'));
});
Breadcrumbs::for('PageAdd', function ($trail) {
    $trail->parent('Page');
    $trail->push('Add', route('page.create'));
});
Breadcrumbs::for('PageEdit', function ($trail) {
    $trail->parent('Page');
    $trail->push('Edit',  url('page/edit/{id}'));
});
Breadcrumbs::for('viewPage', function ($trail) {
    $trail->parent('Page');
    $trail->push('Details', url('page/show/{id}'));
});

//Enquiry Manager
Breadcrumbs::for('Enquiry', function ($trail) {
    $trail->parent('home');
    $trail->push('Enquiry', route('index.inquiry'));
});
Breadcrumbs::for('viewEnquiry', function ($trail) {
    $trail->parent('Enquiry');
    $trail->push('Details', url('inquiry/show/{id}'));
});


//Job Manager
Breadcrumbs::for('Job', function ($trail) {
    $trail->parent('home');
    $trail->push('Job', route('admin.jobs'));
});
Breadcrumbs::for('JobAdd', function ($trail) {
    $trail->parent('Job');
    $trail->push('Add', route('job.create'));
});
Breadcrumbs::for('JobEdit', function ($trail) {
    $trail->parent('Job');
    $trail->push('Edit',  url('job/edit/{id}'));
});
Breadcrumbs::for('viewJob', function ($trail) {
    $trail->parent('Job');
    $trail->push('Details', url('job/show/{id}'));
});

?>