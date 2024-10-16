<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
edubisnis::create([
  'filter' => 'filter-foodbaverage',
  'juduldepan' => 'coba',
  'tema' => 'konten Instagram',
  'title' => 'buat konten instagram untuk bisnis makanan anda',
  'author' => 'irma',
  'titlebawah' => 'Bagimana Membuat Konten Instagram yang baik?',
  'kontenatas' => 'konten atas',
  'kontenbawah' => 'konten bawah'
])
edubisnis::create([
  'filter' => 'filter-foodbaverage',
  'juduldepan' => 'Lorem ipsum',
  'tema' => 'kkkkkkkkkkkkkkk',
  'title' => 'makanan',
  'author' => 'irma',
  'titlebawah' => 'vvvvvvvvvv',
  'kontenatas' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem dolore aliquam enim itaque laudantium corrupti. Facilis voluptates, necessitatibus maiores hic tempore ipsum voluptatum cumque ullam, placeat consectetur totam corporis reiciendis voluptas labore quas. Iure hic est, perferendis at saepe quia dicta blanditiis aliquid consectetur voluptas praesentium nulla architecto, temporibus excepturi odit amet maxime sed, illum quo facere accusamus nihil? Commodi reiciendis voluptates vero ipsam aliquam iste nam. Ex porro voluptate ratione facilis quia necessitatibus optio earum nulla rerum. Doloremque pariatur in saepe amet vero ipsam explicabo, praesentium, ut maiores, aliquid veniam aperiam recusandae eligendi placeat ex. Veniam repellat commodi fuga.',
  'kontenbawah' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem dolore aliquam enim itaque laudantium corrupti. Facilis voluptates, necessitatibus maiores hic tempore ipsum voluptatum cumque ullam, placeat consectetur totam corporis reiciendis voluptas labore quas. Iure hic est, perferendis at saepe quia dicta blanditiis aliquid consectetur voluptas praesentium nulla architecto, temporibus excepturi odit amet maxime sed, illum quo facere accusamus nihil? Commodi reiciendis voluptates vero ipsam aliquam iste nam. Ex porro voluptate ratione facilis quia necessitatibus optio earum nulla rerum. Doloremque pariatur in saepe amet vero ipsam explicabo, praesentium, ut maiores, aliquid veniam aperiam recusandae eligendi placeat ex. Veniam repellat commodi fuga.'
])
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem dolore aliquam enim itaque laudantium corrupti. Facilis voluptates, necessitatibus maiores hic tempore ipsum voluptatum cumque ullam, placeat consectetur totam corporis reiciendis voluptas labore quas. Iure hic est, perferendis at saepe quia dicta blanditiis aliquid consectetur voluptas praesentium nulla architecto, temporibus excepturi odit amet maxime sed, illum quo facere accusamus nihil? Commodi reiciendis voluptates vero ipsam aliquam iste nam. Ex porro voluptate ratione facilis quia necessitatibus optio earum nulla rerum. Doloremque pariatur in saepe amet vero ipsam explicabo, praesentium, ut maiores, aliquid veniam aperiam recusandae eligendi placeat ex. Veniam repellat commodi fuga.
</body>
</html>

@foreach ($edubisnis as $edudetail)
          <div class="col-lg-4 col-md-6 edukasi-bisnis-item {{ $edudetail->filter }}">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>
                    <a href="/cobaedukasi/{{ $edudetail->juduldepan }}">{{ $edudetail->title }}</a>
                </h4>
                <p>Tema: {{ $edudetail->tema }}</p>
                 <!-- <a href="assets/img/portfolio/" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a> 
                 <a href="/edubisnis-details1" class="details-link" title="More Details"><i class="bx bx-link"></i></a>  -->
              </div>
            </div>
          </div>
          @endforeach
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sed ipsam, rerum cumque accusantium atque repellat voluptate? Sit dolore nulla accusantium culpa dicta sunt blanditiis eaque natus, sapiente nisi omnis voluptatibus nemo esse placeat! Accusamus numquam magnam exercitationem aspernatur maiores, aliquam cum asperiores dolor, hic magni illum soluta perspiciatis blanditiis iusto cumque fugiat deleniti a dignissimos, inventore debitis velit dolore. Vitae, quos necessitatibus sit, earum doloremque laudantium repellat sequi explicabo debitis similique dolore accusamus perferendis praesentium eaque, suscipit dolorem veritatis. Quo, dolor. Libero quisquam asperiores dolore velit voluptas. Nisi amet exercitationem ullam a praesentium sint recusandae architecto deserunt earum? Qui.