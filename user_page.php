<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SESSION['username'] === 'aterkia') {
    header("Location: admin_page.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aterkia ASV | User</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    body {
        align-items: flex-start;
        padding-top: 10px;
    }
    body.page-entry-anim {
        overflow-x: hidden;
    }
</style>

<body class="page-entry-anim">
    <div class="body">
        <nav>
            <div class="logo">Aterolas</div>
            
            <div class="status-container">
                <span>STATUS :</span>
                <div id="status-indicator" class="status-pill disconnected">Disconnected</div>
            </div>

            <div class="logout">
                <a href="logout.php" class="btn-logout">Logout</a>
            </div>
        </nav>

        <div class="content">
            <div class="content-1">
                <div class="c1-box">1</div>
                <div class="c1-box">2</div>
                <div class="c1-box">3</div>
                <div class="c1-box">4</div>
                <div class="c1-box">5</div>
                <div class="c1-box">6</div>
                <div class="c1-box">7</div>
                <div class="c1-box">8</div>
            </div>

            <div class="content-2">
                <div class="c2-box">A</div>
                <div class="c2-box">B</div>
                <div class="c2-box">C</div>
                <div class="c2-box">D</div>
            </div>

            <div class="content-middle">
                Middle<br>20%
            </div>

            <div class="content-3">
                <div class="c3-image-area"></div>
                <div class="c3-text-area">
                    <h3>Informasi Kapal</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. A, culpa? Enim velit atque nemo nobis accusamus tempore cupiditate voluptates sint? Totam deleniti aliquam facere consequatur necessitatibus repudiandae ex? Excepturi autem sequi doloremque dolorum omnis ea rerum recusandae! Voluptates alias sit, consequuntur ducimus magnam reiciendis dolore quia fugit perspiciatis libero laboriosam eius hic cupiditate iusto assumenda, ex expedita nesciunt unde velit rerum, cum vitae natus! Corporis, libero velit corrupti quod ex voluptatem nihil accusantium repellat! Repellendus debitis autem qui omnis, cumque explicabo magnam voluptatum nesciunt ad doloribus pariatur nisi corrupti quasi labore ipsam reiciendis eaque quos eos, aliquid atque officiis rerum. Quam, temporibus accusamus, maxime ex perferendis, cum dolor soluta quidem rerum et optio laboriosam illo recusandae veritatis eum labore! Iste, culpa! Excepturi nulla, vel asperiores alias laudantium nemo numquam labore consectetur odit, tempora nostrum nihil. Inventore laboriosam voluptate autem iure quidem voluptas aliquid non beatae quia minima magnam aliquam, at alias velit omnis maxime consectetur officiis commodi voluptatem fugiat optio quis libero. Asperiores rem, natus corporis doloremque similique aliquam dolorem ab impedit at laboriosam odit nam saepe reprehenderit, assumenda perferendis quibusdam adipisci, cum necessitatibus? Enim quis tempore laboriosam! Facere, et error? Soluta fuga, eveniet facere modi ipsum libero exercitationem. Impedit doloribus ipsum ratione enim earum tenetur error facilis sunt neque id! Beatae alias pariatur ullam, et non iste facilis dolore ea ut. Recusandae ratione facilis illo quisquam? Non nobis, dolorum saepe libero modi et accusamus. Expedita, beatae numquam. At officia tenetur iusto incidunt repellendus aut sequi ipsam iste pariatur eligendi, accusamus labore. Voluptatum deserunt recusandae culpa vel consequuntur alias voluptas natus accusamus, sequi, dicta vero facilis sint ipsum aliquam doloremque necessitatibus. Blanditiis veritatis qui ex aspernatur, cupiditate, reprehenderit maxime beatae ad harum molestiae, tenetur illum fugit exercitationem repellat eos? Corrupti sed quidem quae velit aperiam consequatur esse voluptatum labore deleniti, atque autem ipsam magnam odio quo ad cum libero a numquam? Nihil eveniet eum est ab libero similique quisquam voluptas labore deleniti in itaque molestiae distinctio rerum, nobis aspernatur eos voluptatem architecto corporis, ipsa explicabo iusto placeat adipisci cum? Sequi natus commodi quia ex cumque quidem suscipit adipisci aliquid temporibus, quibusdam quod? Ad iusto earum autem reprehenderit, doloribus adipisci modi aut, voluptatibus enim molestiae alias quas in ea voluptatem non nesciunt facilis placeat eaque sit deserunt? Consectetur, natus. Libero quibusdam laborum, laboriosam ad rem nam? Vel quis minus placeat tenetur eum culpa esse voluptatem tempora modi quod, nam sit expedita architecto labore est iste vitae odio numquam aspernatur sunt commodi cum animi dignissimos. Ut at, laborum ab laboriosam consequuntur quasi vero hic deleniti eum sint reprehenderit fuga error omnis consequatur amet rerum eveniet aliquid. Officia nobis quod similique sint temporibus suscipit quidem repellendus id eligendi blanditiis perspiciatis tempora ad maxime quia a doloremque debitis itaque quas repellat, laboriosam voluptates at, veniam impedit. Ratione quo, quas similique quaerat, sed impedit itaque temporibus dolores voluptatem, dolorem animi maiores omnis veniam incidunt sequi eaque repellendus? Eius architecto nesciunt sint modi quae reiciendis debitis? Earum corporis, voluptates autem, consequuntur aperiam eum impedit, quibusdam sequi excepturi nam blanditiis perferendis nesciunt temporibus mollitia asperiores modi! Minus consequuntur et dicta magnam voluptates, id animi necessitatibus officiis aut veritatis ipsum impedit a excepturi ad atque voluptate laboriosam unde possimus accusamus? Atque laboriosam ducimus saepe nam sit cumque praesentium ex. Debitis labore aliquid nulla fugit ad perferendis, necessitatibus quaerat doloribus aspernatur quisquam impedit numquam. Explicabo fugiat placeat, dolorem nam recusandae provident at, corrupti enim animi laborum nostrum eligendi, aliquam quaerat velit. Voluptatum perspiciatis id unde amet natus reprehenderit incidunt veniam illo porro provident recusandae alias vitae impedit fugiat consequatur saepe suscipit nemo iusto tempore sint accusamus perferendis, reiciendis quod! Alias, cumque vel quaerat, animi, voluptas repellat veritatis eaque modi iure a earum perspiciatis velit tempore vero deleniti repellendus necessitatibus facilis temporibus magni incidunt doloribus et? Ea consequuntur esse maxime a architecto aperiam adipisci delectus necessitatibus consectetur placeat est quae eius, deleniti ducimus quo laborum soluta minima modi. Suscipit deserunt illo dolore molestias nisi eius rerum distinctio iste magnam natus doloribus culpa voluptatibus, nostrum pariatur impedit, fuga recusandae ex cumque illum dolorum voluptates. Molestiae repellat deleniti cum maiores. Eum sint aliquid omnis. Dolorum, veniam repudiandae? Temporibus ad praesentium nobis vel molestiae repellat facere architecto delectus dolor illo. Ab, fugit numquam beatae, iure quidem recusandae magni distinctio inventore nihil assumenda blanditiis, temporibus voluptate! Porro nobis at praesentium fuga nulla provident laudantium explicabo itaque cumque autem earum velit, aliquid voluptate numquam dolorum ullam illo deleniti nihil recusandae repellat quam! Vitae quibusdam unde eos ut eaque provident doloribus sunt consequuntur? Optio iure ut, quisquam vitae itaque quo laudantium debitis aliquam cumque sequi dignissimos beatae voluptate voluptatibus, culpa quam pariatur? Libero ex temporibus accusantium, doloremque, praesentium neque tempore, voluptas reprehenderit voluptate quidem nobis! Veritatis earum magnam itaque nihil unde sint nemo, reiciendis totam magni mollitia amet nulla consequuntur facilis possimus doloremque obcaecati vero, odio sequi fuga provident, omnis non qui aliquam. Autem officia libero impedit sunt exercitationem expedita aliquid tenetur? Ad perferendis dolor illo quas sequi! Corporis laudantium distinctio suscipit! Repudiandae a quisquam aliquid odio hic magni sit nostrum. Itaque quod dignissimos ipsam in, inventore sapiente! Ducimus saepe impedit quisquam quas ipsum commodi ratione aliquid voluptas, inventore nemo a maxime voluptate? Sit vero nihil error natus ad omnis officia, eum voluptatibus iste tempore dolorem veritatis sunt porro tempora dolor aliquid assumenda earum, labore esse minus, nulla obcaecati inventore maxime quibusdam. Velit incidunt aliquam culpa reiciendis ratione quia voluptatem expedita ipsum, assumenda provident illum quo! Consequatur esse deserunt vero tempora minima quisquam cum reprehenderit maxime non quaerat. Voluptatem et molestias magnam unde autem culpa excepturi quo impedit iste minima distinctio, quas quaerat, ea exercitationem maxime quae illum, nobis hic a reiciendis dolorem voluptas ipsam? Dolorem magnam dolor illo cumque minus a sint asperiores debitis architecto in praesentium, commodi sequi deserunt eius dolorum voluptas quae delectus ab sit, perferendis dignissimos suscipit provident quo! Incidunt consectetur ipsum culpa reiciendis sed laborum dolorum eaque recusandae velit non repellendus, illo doloribus dicta voluptates, eligendi molestiae! Placeat vitae corrupti sit maxime sunt suscipit earum omnis veritatis molestiae exercitationem. Sit, voluptatem.
                    </p>
                </div>
            </div>
        </div>
</body>

</html>