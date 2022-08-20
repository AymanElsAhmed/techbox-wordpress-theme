<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')
            ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">الإشتراك في النشرة البريدية</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">كبير</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="بحث">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                            <title>بحث</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">إنشاء حساب</a>
                </div>
            </div>
        </header>


        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div>

                    <div>
                        <a href="<?php the_permalink() ?>">

                            <?php the_title(); ?>
                        </a>
                        <?php
                        // $test = the_permalink();
                        the_post_thumbnail();

                        // the_excerpt();
                        // var_dump($test);

                        ?>

                    </div>

                    <div>
                        <?php the_content() ?>
                    </div>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary"><?php
                                                // the_category(',')
                                                wp_nav_menu();
                                                ?></a>
                <a class="p-2 link-secondary" href="#">الولايات المتحدة</a>
                <a class="p-2 link-secondary" href="#">التقنية</a>
                <a class="p-2 link-secondary" href="#">التصميم</a>
                <a class="p-2 link-secondary" href="#">الحضارة</a>
                <a class="p-2 link-secondary" href="#">المال والأعمال</a>
                <a class="p-2 link-secondary" href="#">السياسة</a>
                <a class="p-2 link-secondary" href="#">الرأي العام</a>
                <a class="p-2 link-secondary" href="#">العلوم</a>
                <a class="p-2 link-secondary" href="#">الصحة</a>
                <a class="p-2 link-secondary" href="#">الموضة</a>
                <a class="p-2 link-secondary" href="#">السفر</a>
            </nav>
        </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">عنوان تدوينة مميزة أطول</h1>
                <p class="lead my-3">عدة أسطر نصية متعددة تعبر عن التدوية، وذلك لإعلام القراء الجدد بسرعة وكفاءة حول أكثر الأشياء إثارة للاهتمام في محتويات هذه التدوينة.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">أكمل القراءة...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">العالم</strong>
                        <h3 class="mb-0">مشاركة مميزة</h3>
                        <div class="mb-1 text-muted">نوفمبر 12</div>
                        <p class="card-text mb-auto">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي.</p>
                        <a href="#" class="stretched-link">أكمل القراءة</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">التصميم</strong>
                        <h3 class="mb-0">عنوان الوظيفة</h3>
                        <div class="mb-1 text-muted">نوفمبر 11</div>
                        <p class="mb-auto">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي.</p>
                        <a href="#" class="stretched-link">أكمل القراءة</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
                        </svg>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>