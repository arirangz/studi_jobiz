<?php require_once APP_ROOT . "/templates/header.php" ?>

<section class="text-gray-600 body-font">
  <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
    <div class=" md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Les offres d'emploi</h1>
    </div>
    <div class="flex flex-wrap">
        <?php foreach($jobs as $job): ?>
            <?php /** @var App\Entity\Job $job */ ?>
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2"><?=$job->getTitle()?></h2>
                <p class="leading-relaxed text-base mb-4"><?=substr($job->getDescription(), 0, 90)?>...</p>
                <a href="/job/?id=<?=$job->getId()?>" class="text-indigo-500 inline-flex items-center">Voir l'offre
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        <?php endforeach; ?>

        </div>
  </div>
</section>

<?php require_once APP_ROOT . "/templates/footer.php" ?>
