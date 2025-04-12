<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php"); 
    exit();
}

$user_email = isset($_GET['email']) ? $_GET['email'] : $_SESSION['user_email'];

// Debugging: Print session email in browser
echo "<script>console.log('Session Email in home.php: " . $user_email . "');</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../assets/favicon_io/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ECOlect</title>
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/scroll.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="../home.php" class="brand-link">
                <img src="../assets/ECOlet_rm.png" alt="E-Waste Recycling Logo" class="logo" />
                <span class="brand-name">ECOLECT</span>
            </a>
        </div>
        <div class="navbar-links">
            <a href="types.php?email=<?php echo urlencode($user_email);?>" class="nav-button">Types of E-Waste</a>
            <a href="report.php?email=<?php echo urlencode($user_email);?>" class="nav-button">Report E-Waste</a>
            <a href="nearby.php?email=<?php echo urlencode($user_email);?>" class="nav-button">Nearby E-Waste</a>
            <a href="about.php?email=<?php echo urlencode($user_email);?>" class="nav-button active">About Us</a>
            <div class="profile-container" onclick="toggleDropdown()">
                <i class="fas fa-user-circle profile-icon"></i>
                <i class="fas fa-chevron-down dropdown-arrow" id="arrow"></i>
                <ul class="dropdown-menu" id="profile-dropdown">
                    <li><a href="../profile.php?email=<?php echo urlencode($user_email); ?>">My Profile</a></li>
                    <li><a href="../reported.php?email=<?php echo urlencode($user_email); ?>">Reported E-Waste</a></li>
                    <li><a href="../login.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <button class="hamburger">☰</button>
    </nav>
    <div class="content">
        <!-- main content -->
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quidem repellat maxime esse sit fugiat sequi, ea laborum qui nemo iusto ex delectus numquam, ullam nisi, vero commodi odit nulla!
         Provident mollitia omnis quasi! Doloribus non sapiente ad accusamus ipsa architecto impedit officia eligendi nam quis, magni doloremque. Voluptatibus inventore sunt eos sed tenetur iusto qui repellendus, voluptas neque minima!
         Sunt iusto aut, quo quidem fugit deleniti eos unde iste non voluptatibus. Amet atque magnam cumque quae quas iste, praesentium quis error totam est non porro. Modi amet deserunt illo.
         Reprehenderit quidem dolor earum ipsum distinctio tempora debitis, sed provident? Nulla, beatae adipisci quos quo quasi magni deleniti quidem ullam! Eos enim asperiores dolorem veritatis maiores consequuntur rerum aperiam omnis?
         Sequi expedita modi vitae? Architecto cum cumque consectetur. Culpa architecto et delectus, nostrum voluptate, doloribus molestiae unde reiciendis placeat earum vero omnis libero sapiente iste consequuntur ipsum ipsam, neque est.
         Recusandae soluta nemo maiores quidem delectus nam dolorum accusantium, necessitatibus illo id assumenda libero nesciunt impedit deleniti. Nostrum quisquam blanditiis distinctio ut, atque, in aut nobis quo accusantium eaque perspiciatis?
         Minima sint odit et, molestiae repellendus at explicabo cumque laudantium nihil dignissimos iusto obcaecati, esse, placeat maxime magnam consequatur distinctio architecto? Eius nisi, illum aliquid cumque rem dignissimos enim temporibus?
         In voluptates ipsam deserunt eius, deleniti reprehenderit architecto minus eaque quo eligendi voluptas vero magnam nemo maiores. Quasi commodi dignissimos, iusto quae explicabo quibusdam, ipsum nobis suscipit tempore eos itaque.
         Nisi quaerat voluptate explicabo perferendis deleniti eveniet nobis a ipsa accusamus perspiciatis, officia molestiae sunt animi ab. Natus consequuntur eveniet molestias temporibus laudantium qui, velit minima, reprehenderit ab, minus soluta.
         Dicta natus amet, pariatur error harum exercitationem id, illum dolor minima accusamus sit, qui repellendus nisi ea aperiam atque! Repellat at iusto eaque vel laborum sapiente facilis fugit tenetur aliquam?
         Vitae blanditiis aliquam accusantium incidunt ipsum dicta labore asperiores quae! Et, ab atque doloribus aspernatur recusandae nisi inventore nemo hic deleniti, cupiditate porro, iusto soluta unde eveniet rerum provident excepturi?
         Consequatur laborum alias in mollitia repellendus eaque, voluptate cumque quod deserunt, est tenetur ipsum temporibus incidunt maxime assumenda ullam harum dolorum sequi at modi. Consequuntur fugit impedit hic aspernatur. Placeat!
         Accusamus obcaecati nobis eveniet illum, voluptatum ipsam molestiae, doloribus magni esse facere sequi tempore deleniti, numquam quidem adipisci. Hic ipsum consectetur quasi inventore aliquid facere saepe, culpa similique mollitia explicabo.
         Odit officiis laboriosam ea dolore eos. Asperiores excepturi tempore totam magni nisi ullam earum animi nesciunt adipisci vel tenetur molestias quisquam quidem consequatur accusantium, inventore, necessitatibus maiores, voluptatem autem? Impedit.
         Recusandae eius soluta veritatis fugiat suscipit cum, doloremque mollitia eum autem a ad dolor officia cumque odio quasi quo nesciunt maxime fugit facere ipsum? Numquam alias temporibus laborum pariatur ratione?
         Beatae, magnam! Obcaecati, vitae facilis placeat sit, quod provident beatae similique voluptate voluptates unde temporibus aspernatur nisi distinctio! Dolorum vitae nulla, nesciunt debitis possimus expedita! Sint, quos doloribus! Illo, neque.
         At soluta ab quos. Alias nihil nam facere reiciendis, totam necessitatibus libero quod eveniet eum deserunt odit vero quas ipsum explicabo fugiat obcaecati doloremque enim qui delectus repudiandae atque odio.
         Quae, eum. Non nemo at assumenda voluptates atque quo molestiae dignissimos aspernatur, rerum vel ut cupiditate. Sint molestias ea cumque velit! Iusto similique quae deleniti, error ea eligendi vel inventore.
         Amet nemo eos illo. Et eligendi labore eum quidem quibusdam dolorum commodi possimus? Quas culpa distinctio molestias perferendis numquam, facere iusto ipsa delectus et quidem laborum natus animi, neque exercitationem.
         Praesentium facere alias vero quam consectetur atque nisi quibusdam accusamus inventore officia eaque, doloremque nemo. Error, praesentium, eaque architecto dicta placeat, atque soluta iste rerum totam perferendis ratione eos illo?
         Illo consectetur iusto maxime, quos laudantium, a, commodi corporis fugit mollitia voluptatibus quod maiores dolore? Inventore itaque aliquam voluptate dolorem rerum quo quis earum quaerat. Ducimus eius provident ut possimus.
         Officiis vitae beatae, quos voluptates sed illum labore accusamus veniam consequuntur magnam porro dolore asperiores eveniet velit maiores, dolores tempora non magni at quod. In tempora sint culpa voluptatem nam!
         Laborum accusamus odio aut iure sit nostrum nihil repellat, ad provident suscipit quisquam ipsum odit nam minus rem inventore, asperiores quis illo consequuntur, qui aperiam quos quaerat repudiandae ullam. Vel?
         Error nostrum voluptatem deserunt natus iusto doloribus quae esse nihil a maiores, beatae quaerat voluptatum exercitationem quo illum in. Ratione impedit recusandae dicta magnam quibusdam earum hic, corporis tempore voluptatum.
         Non, culpa! Eos incidunt quasi excepturi, ipsum numquam est, iure exercitationem harum soluta doloremque placeat ullam nam commodi reprehenderit praesentium itaque officia nobis. Officia enim magni deleniti deserunt quasi quos!
         Aut vitae ullam mollitia voluptatum, cupiditate reiciendis ipsa est modi explicabo numquam facilis odio, consequuntur quod dolores voluptate dolorem nostrum nisi, cumque deserunt quo. Voluptate eum possimus ullam doloribus natus!
         Nulla magnam ipsam repudiandae incidunt sequi quam a perferendis culpa corporis suscipit quos autem perspiciatis porro, corrupti aliquam vitae nostrum eligendi laudantium? Voluptate atque ipsam amet, dolores nemo corrupti at!
         Possimus natus maiores officiis praesentium corrupti minus laborum non sit quod neque, consectetur quibusdam, quos cupiditate unde esse id sequi, architecto dolores ea fugit ipsa saepe. Error voluptates nemo illo?
         Possimus libero eos hic suscipit accusamus. Ullam pariatur nostrum quos quae non nobis et nihil nemo voluptatem repellendus, facilis voluptates recusandae cupiditate laudantium. Reiciendis dolores ullam eaque officiis atque? Veritatis?
         Rerum earum temporibus dolor sunt quam atque inventore, deleniti ex expedita nulla numquam aut aperiam itaque ipsa vel. Corrupti quia, animi non aliquid illo repudiandae obcaecati distinctio porro delectus sit.
         Officia adipisci doloremque quis magni numquam. Nesciunt harum veniam sint placeat consequuntur. Officiis, officia laborum vel earum ab fugiat! Vel, reprehenderit! Voluptatum deleniti sed similique commodi totam placeat! Ullam, laborum.
         Reiciendis, fugit quaerat officiis in rem commodi corrupti reprehenderit distinctio voluptas ratione soluta dolores ut repellendus quidem? Possimus aliquid eos odit voluptate rem tenetur, ut amet molestias maiores! Id, incidunt.
         Error dolorem modi voluptate doloremque dolorum quod saepe magni voluptatem libero! Numquam eum voluptatem praesentium animi est nemo exercitationem qui, reiciendis, aut rerum facilis doloremque, quisquam deleniti autem earum illo?
         Fugiat modi, error similique delectus obcaecati velit nisi hic reprehenderit magnam in mollitia maiores commodi aliquam distinctio, fugit aperiam esse unde doloremque vero vitae quae ad. Nesciunt consequuntur temporibus reiciendis.
         Minima, ullam? Sequi dignissimos laboriosam facilis in? Explicabo beatae temporibus dolorum omnis voluptatem tempore at ullam saepe cumque incidunt reiciendis repellendus architecto exercitationem et dicta, eum iusto, quibusdam fuga sint.
         Deserunt ad ullam doloribus sequi. Quam maxime ducimus, placeat quibusdam facilis repellendus eos sunt excepturi officia porro debitis soluta enim aliquam rem velit sequi fugiat veniam molestiae nam voluptate incidunt.
         Officiis porro quae sequi quidem veritatis dolorem magnam explicabo modi unde ipsa, perferendis suscipit minus optio molestiae nostrum dolorum fugiat ducimus nulla quis distinctio eos ratione ab esse repellendus. Cum!
         Excepturi illo, ratione quo nisi deserunt saepe sed magni nobis repellendus at iste aut laboriosam officiis ullam quia quas sit facilis accusamus! Perspiciatis dolorum vitae a soluta odio cumque. Fuga?
         Architecto magnam recusandae minus sed modi? Pariatur repellat quia, est quod iste earum non odio omnis aliquam eum aut deserunt esse quo, nam consectetur! Quo ad alias nulla magni blanditiis.
         Molestiae aspernatur sint tempore vel laudantium. Sit, eius adipisci dolores, possimus blanditiis ab at dicta qui explicabo quos exercitationem placeat vitae corporis nobis sequi laudantium laboriosam itaque molestias tempora molestiae.
         Ducimus nihil ullam tempora mollitia accusamus quibusdam magni maxime corrupti, labore iusto, modi molestias, delectus facilis ea est! Delectus facere veritatis dolor culpa iure labore minus quos odit sed illum?
         Voluptate rerum vel recusandae repellat ab beatae deserunt perferendis, dolor nulla aliquam eaque vero, molestiae corporis repudiandae, magnam ipsam asperiores aut nam amet! Voluptas perferendis suscipit dolorum ea soluta veritatis!
         Odit dolore dolor quod aperiam necessitatibus molestiae, voluptates eos fugiat, asperiores iure recusandae, eum alias. Nisi, laboriosam unde aliquam non molestiae sed deserunt magnam beatae nam odit, corrupti, labore saepe!
         Ipsam aspernatur voluptate quod ut aliquid delectus ab inventore? Corporis, praesentium illum amet incidunt quia, earum doloremque debitis minima nulla et beatae consequatur totam consectetur harum ipsa sunt enim vero.
         Earum voluptates perspiciatis, quo tempora rem ipsum dignissimos delectus illo veritatis? Deleniti natus suscipit consequuntur tempora omnis, ullam quam magni facilis, laudantium corporis earum mollitia quisquam? Neque consequatur deserunt minus?
         Omnis magni, fuga explicabo, cum, sunt quam ad quia nam dolorem velit expedita. Voluptas blanditiis quod quisquam consequatur, voluptate, sapiente asperiores numquam repellendus tempora molestiae dolorum delectus dolore esse doloribus?
         Possimus consequuntur veritatis, natus officia modi dicta quod eos, quisquam eligendi alias neque praesentium ea blanditiis nostrum cupiditate amet aspernatur a quae! Enim repellendus voluptas dolores provident quo. Dolores, consectetur!
         Exercitationem non ex ab consectetur a libero doloribus fuga quibusdam! Quae tempora consequatur corporis, iste, magnam modi dolore doloremque vel ipsam ipsum eos aliquid dicta laboriosam quia adipisci quod mollitia.
         Laboriosam sint quam nostrum aut accusamus, omnis fugit voluptatem voluptas reiciendis accusantium quia expedita iste eius quisquam eveniet. Architecto ex illum nulla alias error ullam explicabo, commodi quis eligendi odio!
         Iure temporibus perferendis, fuga minus dolorum ut ducimus molestiae molestias mollitia doloremque dolorem eos atque, corrupti qui iste enim consequatur dicta optio incidunt asperiores architecto. Earum unde nobis ipsa est.
         Quis placeat enim et nemo tempora, dolores reiciendis aspernatur, odio consectetur facere voluptates soluta dolore. Id enim quidem tempora minus culpa quasi aliquid nisi! Quia expedita libero veritatis? Mollitia, debitis.
         Iste exercitationem sequi soluta praesentium minima laboriosam sed placeat, ad dicta omnis quod accusamus consectetur nostrum distinctio corrupti tempora nihil enim quasi voluptatem cupiditate pariatur facere laborum. Ab, similique nihil.
         Laborum sapiente aliquid totam odit dicta, cumque mollitia veniam officia aspernatur itaque perspiciatis debitis tenetur illo quis doloribus vitae cupiditate unde nemo, soluta repellat illum hic! Nesciunt architecto vel saepe.
         Qui fuga mollitia amet illo molestiae quaerat doloremque voluptates officia, omnis, sed earum quae provident accusamus voluptate eum iste, eos architecto aspernatur! Quo veniam amet modi blanditiis corrupti assumenda voluptate?
         Porro perspiciatis libero rem tenetur omnis, accusantium iusto distinctio beatae consequuntur qui, error, fuga et tempora. Modi eum aliquam nostrum fugiat totam iure, distinctio quas sapiente quaerat asperiores laboriosam aliquid.
         Dolores consequuntur quaerat laudantium ipsum. Earum laborum accusamus quo. Sapiente eos dolor nostrum, adipisci aperiam ea impedit explicabo expedita eum perferendis placeat optio alias quidem excepturi itaque consequuntur quae rerum?
         Laudantium enim adipisci perferendis asperiores. Laborum molestiae obcaecati maiores autem cumque non sed tempore suscipit sint eius repellat voluptates, eos tenetur, perspiciatis officia vel! Nobis reiciendis quis nulla optio aliquam!
         Culpa consequuntur nisi quaerat eaque impedit modi iusto facere voluptatibus distinctio perferendis tenetur consectetur, in aliquam deleniti optio reprehenderit omnis, aspernatur reiciendis dignissimos molestias cum dolore delectus molestiae accusantium! Quia!
         Veritatis ab, reiciendis doloribus minima corrupti veniam officia quaerat molestias harum ut nam laborum amet quia aut quo iste architecto officiis adipisci? Aliquam officia sint voluptas explicabo inventore animi eum?
         Maxime neque error repellendus architecto facere iure nostrum cumque ducimus ullam officia culpa aut dignissimos quas odit autem laudantium rem deserunt dolor iusto nobis optio beatae, eaque quaerat? Ipsam, excepturi?
         Facilis rerum placeat quas odit? Temporibus perspiciatis necessitatibus, nostrum modi consequuntur quia eos aperiam amet eius omnis mollitia vitae corporis distinctio atque dignissimos? Ea officiis debitis, rem error saepe accusamus.
         Consequatur voluptatibus ab quibusdam aut in aliquam quod quisquam natus rem error sit iusto nemo ullam repudiandae, consequuntur mollitia sunt, sed ducimus. Deleniti facere dolore fugit ab, quibusdam facilis ipsum.
         Corrupti nihil a facere sapiente omnis consectetur, hic, aliquid ratione quis ad asperiores repellendus aspernatur perferendis totam magni corporis eligendi voluptatem tempore iure ipsa aperiam consequuntur! Voluptatum distinctio aliquam culpa.
         Velit atque facilis fugit dicta accusantium, voluptate quo, sapiente quas quod architecto fuga sint voluptatibus soluta vitae labore. Fuga hic officiis nobis tenetur nesciunt repudiandae iste quia cumque! Temporibus, doloremque.
         Officiis quos autem eius architecto? Molestiae ipsum veritatis inventore amet non voluptate omnis commodi, rem quis, officiis suscipit quo quos corrupti. Corporis quia reprehenderit ea magnam tenetur ducimus rem optio!
         Quo deserunt enim, beatae earum distinctio ut non illum esse aliquam excepturi nostrum nihil explicabo dolorem similique porro fuga veniam? Magni voluptate beatae quibusdam voluptates dolore, distinctio vitae quam corrupti.
         Libero magnam optio consectetur facilis incidunt earum sint ex minus laboriosam vero fuga, molestiae quidem dolor, odit ipsum consequatur! Atque possimus eveniet pariatur ipsa quo cupiditate perspiciatis necessitatibus voluptatem placeat?
         Voluptates sequi vero eveniet ipsum in autem praesentium, quisquam laborum, id vitae officiis ea fugit placeat corporis obcaecati velit, impedit aliquam optio quas nesciunt fugiat? Ab eligendi commodi nemo consectetur.
         Odio est porro, perferendis non vitae inventore repellat soluta animi placeat in voluptatem rem cupiditate alias quae repudiandae beatae adipisci repellendus provident voluptate iusto, dolores illo nostrum, deserunt ipsam? Rerum?
         Dolorem itaque explicabo quod, modi laudantium asperiores nihil sit, architecto similique odio neque voluptatum tempora, vitae quam. Sapiente magni, nam consequatur enim dicta voluptate est id possimus odit quidem necessitatibus!
         Maxime error nesciunt nobis quo unde, commodi ipsam officia harum reprehenderit asperiores eos ducimus ex ipsa labore magni. Ratione minus voluptas labore delectus nostrum itaque illo iste debitis commodi voluptates!
         Beatae nulla facere magnam. Placeat tempora minima, nihil tenetur inventore natus labore eligendi et nisi qui magnam sit nulla enim laborum deleniti consequuntur. Amet quis qui, beatae rerum nobis perferendis?
         Ea sed iure officiis deleniti laborum voluptates perspiciatis cumque sint non minus tenetur, vel minima eum, ipsum pariatur magnam ut temporibus molestiae ipsa odio necessitatibus, repudiandae laboriosam architecto ratione. Similique!
         Magni ut, corrupti quasi eligendi ex, quo, a sed provident amet beatae magnam explicabo dolor nemo iste quibusdam voluptatum quaerat veniam? Dicta, quibusdam magnam unde explicabo voluptas error placeat. Mollitia!
         Voluptatem qui dolor tempore, at explicabo repellat tempora et facere doloremque! Eum harum quis nam in fugit? Sequi harum voluptate unde id doloremque! Autem reiciendis praesentium alias eveniet corporis velit!
         Tenetur recusandae rem at repellendus, molestiae sit, totam tempora ducimus atque dolorem amet necessitatibus qui ad illum? Sit culpa vero ut doloremque! Consequatur blanditiis recusandae corporis, eos saepe assumenda. Cum.
         Temporibus necessitatibus repellat eius officia harum eaque distinctio asperiores quos delectus laboriosam qui consequuntur adipisci illo quae odit vel, sint vitae porro aperiam natus at quo ab. Illo, quisquam ipsum.
         Quo expedita unde facere amet laboriosam ipsa iste placeat? Ducimus velit dignissimos voluptate, mollitia laborum officia modi alias dolores eos vero ullam ea ipsum temporibus odio quis excepturi dolorem perspiciatis!
         Culpa nobis impedit, repudiandae blanditiis vero obcaecati harum suscipit nulla consectetur iure et iusto molestias optio dicta ipsa. Esse, rerum! Ea a commodi nihil quia. Reprehenderit tempore repellat perferendis dignissimos!
         Porro voluptates accusantium natus nihil enim deleniti hic quos sunt quasi sint consectetur dicta fugit, labore animi debitis dolore aspernatur nulla delectus eveniet veritatis iusto dignissimos mollitia maiores quisquam? Recusandae!
         Explicabo at ex voluptas quam laboriosam ea odio delectus illo! Explicabo, fugit eius dolorum, accusantium magni odio quidem sapiente obcaecati repellat et nesciunt id cum asperiores atque debitis repudiandae quibusdam.
         Delectus vero blanditiis temporibus minima eum sequi non exercitationem sed amet fugiat consectetur quam, qui facilis deserunt, quisquam optio mollitia adipisci sint nemo distinctio ab laboriosam repudiandae repellat veritatis. Obcaecati?
         Porro, obcaecati eum. Et illum commodi, dicta, mollitia earum doloremque vero nihil itaque id iure, est quasi rem quod magnam quibusdam sit numquam. Necessitatibus, omnis nam voluptatibus provident enim aliquam?
         Dignissimos expedita consequuntur, illum suscipit unde, fuga nobis consectetur reiciendis laudantium accusamus, saepe magnam excepturi voluptatibus aut eligendi. Qui debitis eaque perferendis molestias odit saepe voluptatibus hic eum consectetur dolorem?
         Ut libero ab excepturi eveniet nisi similique ex debitis cum temporibus eligendi minus aut fugiat laborum maxime eum quisquam, velit voluptas voluptatem? Quae quaerat delectus, in error tenetur nam illo.
         Molestiae, nulla corrupti, minima enim laborum repellat accusantium doloremque dolore deserunt tenetur quia mollitia voluptates quas exercitationem commodi? Praesentium recusandae vitae inventore necessitatibus ipsam quae laborum dolorem rerum consequatur similique.
         Fugiat ullam saepe autem magnam. Veritatis provident sit laboriosam, recusandae corrupti placeat molestiae magni eveniet, adipisci tempore voluptates, modi ad dolores. Sequi illum eveniet hic deleniti magni aliquam voluptatibus libero.
         Sapiente maxime sunt alias pariatur, adipisci explicabo odit omnis, ut est quibusdam incidunt culpa officiis, quas fuga vel distinctio veritatis consectetur! Labore iste maiores, voluptates magni aut quasi exercitationem nemo.
         Totam delectus nobis suscipit, officiis rerum obcaecati dolor rem reprehenderit a earum corporis aperiam consequatur odit qui commodi eum! Unde est doloribus atque. Voluptatem itaque eum expedita, possimus perferendis ab?
         Sed in optio soluta quisquam enim alias veritatis autem tempora cum accusantium quos, iusto facere quibusdam doloribus. Eveniet, eos laboriosam, repudiandae culpa quidem, voluptatem dolor ad adipisci praesentium laudantium ipsa!
         Quaerat quia, porro harum laudantium accusantium necessitatibus quisquam delectus voluptatibus? Laborum natus iste, illo maiores nostrum facere beatae aliquid. Eaque labore officiis modi architecto iste sint blanditiis. Ipsam, nisi blanditiis.
         Quam ut ratione repellendus ad, voluptatibus aliquam nemo totam ex odio explicabo dolor ea labore culpa quo exercitationem nobis maxime tempore quod? Vitae eum quaerat quae! Ab deleniti impedit nostrum.
         Enim, sunt nulla cum cumque iste explicabo ullam adipisci blanditiis architecto? Beatae, explicabo? Inventore sequi adipisci praesentium libero, ipsum officiis, rerum minus recusandae qui voluptate ducimus placeat molestiae necessitatibus eum.
         Ea temporibus iure, itaque, neque recusandae reprehenderit corporis voluptatibus laboriosam inventore atque et adipisci iusto aspernatur ipsam expedita magnam odio ad, laborum rerum doloribus cumque possimus aliquam illo! Deleniti, sed.
         Iusto facere deleniti odio nobis rerum at enim sunt consectetur inventore, eveniet nemo modi neque nisi ea minima hic quis eum numquam dolorum praesentium maxime ducimus sapiente. Quia, inventore veritatis.
         Sit, iste architecto eum, quam neque blanditiis quaerat voluptatum earum doloremque maxime, nesciunt sapiente provident nisi. Obcaecati accusantium pariatur quam earum eius aspernatur quis neque minus, facilis eaque, mollitia vero?
         Blanditiis debitis, ipsam illum nihil unde consequuntur! Quo a corporis debitis, temporibus possimus earum ullam iste eius nemo labore ea blanditiis aliquid soluta nihil aut repudiandae dolorem voluptates exercitationem. Fugit?
         Quis, maxime. Ut asperiores, doloremque incidunt sunt sapiente quod temporibus dolorem, distinctio eligendi dolores expedita impedit deleniti consequatur dolor architecto quisquam adipisci quibusdam unde numquam corporis cum ea commodi libero!
         Omnis quos cupiditate nulla adipisci nostrum eos, quisquam blanditiis veniam suscipit facilis accusantium ut dolorum ullam dolor minus illum minima eaque non temporibus expedita magnam ratione? Nobis eos adipisci ratione?
         Incidunt vel et doloremque totam fuga, cumque tempore, quo officiis ea ex pariatur porro. Hic perferendis autem cum? Error aliquid beatae odio aspernatur? Ab, quasi voluptatem voluptatibus animi doloremque illo?
         Corporis possimus vero, quis ad molestiae nulla quae dicta aperiam sint modi libero veritatis vel id similique in. Consequatur temporibus nulla nihil vitae tempora id, quibusdam neque enim quidem porro.
         Dicta temporibus nobis et blanditiis pariatur assumenda sapiente perferendis tempore non accusamus eos maiores, iste impedit ratione minima officiis maxime iure, tenetur similique fuga magnam architecto consequatur praesentium sit! Dolorum.
         Natus odio non nam amet eligendi tenetur, eaque itaque earum animi accusamus quasi in tempora repudiandae excepturi ad harum explicabo ducimus! Natus minus ut obcaecati debitis temporibus quas, vero cum.
         Ea placeat reprehenderit impedit et possimus rem sed corrupti dolor, necessitatibus veniam harum, totam incidunt a. Dolores laudantium atque, natus minima sunt vero hic libero! Esse fugit ab ea laboriosam?
         Non cupiditate animi obcaecati voluptate minima, veritatis aut quos magni, eum consequatur iure excepturi provident, et error voluptatem? Quam porro architecto hic error autem dolore, ipsam perspiciatis accusantium dicta asperiores?
         Incidunt possimus distinctio nobis nulla corrupti tempore illo quas nam harum, deserunt aliquam fuga consequatur quam vitae laboriosam. Debitis, beatae quas. Excepturi aut quidem et assumenda laudantium doloremque itaque doloribus?
         Ipsa eum voluptas, delectus quae corrupti consequuntur beatae dolor blanditiis harum eius suscipit libero vero sint quia expedita sapiente explicabo repellat eaque temporibus enim aspernatur esse nisi? Quam, explicabo aperiam.
         Dolores, voluptate quo? Expedita tenetur, cupiditate quaerat sequi voluptate eum veritatis quia illum pariatur laboriosam, dolorum laudantium vitae, non excepturi ratione deleniti eos consequatur? Nostrum necessitatibus debitis eius pariatur sit!
         Velit tempora dolorem, esse officiis suscipit vel numquam tempore voluptate facilis quos cumque asperiores corrupti natus! Animi qui odio nobis ducimus illo! Optio vitae delectus repudiandae minima provident? Eum, voluptatem?
         Ipsa nesciunt reprehenderit officiis dolorem aliquid, ut doloribus cupiditate alias tempora iusto deserunt quaerat ipsam. Adipisci, architecto ipsam eum modi ducimus autem cupiditate dolore mollitia asperiores itaque, ratione deleniti velit?
         Voluptate at quae, harum quas hic illum sequi iste sint aliquam sapiente a ducimus eveniet dignissimos reiciendis minus, pariatur voluptatem cumque enim similique explicabo earum rerum recusandae. Quis, fuga dolorem.
         Earum animi odit accusantium necessitatibus? Placeat repellendus corporis sapiente modi sunt obcaecati optio totam necessitatibus perspiciatis ea, doloremque debitis asperiores, porro quia hic nam consequuntur magni? Assumenda sequi placeat ea.
         Molestiae debitis ex fugiat sed illum nisi veniam a nostrum, distinctio dolorum facilis quaerat aperiam iusto natus libero voluptatem animi ipsa, nemo facere? Modi necessitatibus, dolorem repellendus perspiciatis ipsam aliquid?
         Aliquid, ratione nam velit consequatur nobis officiis a impedit natus quisquam, dignissimos ad, consequuntur neque doloribus ipsum nisi. Illum eveniet eligendi nostrum corrupti, minima id non tenetur! Facilis, repudiandae beatae.
         Necessitatibus ipsam suscipit modi magni. Reprehenderit commodi quidem voluptate atque facilis aspernatur maxime ratione tempora quo consequuntur asperiores soluta, ducimus saepe cupiditate quam! Cum ipsam minus distinctio et libero quidem!
         Maxime quaerat ab itaque similique, autem tempora assumenda ut quae, facere reprehenderit voluptatum? Necessitatibus quod accusamus esse corporis! Quidem sapiente minus repellendus dolorem sequi saepe totam quos nulla debitis cupiditate.
         Cupiditate voluptatem atque quos tempore nulla, omnis consectetur, accusantium repudiandae illum dolorum explicabo ratione ex iste quae aperiam dignissimos fuga magnam similique voluptatum. Iure, temporibus expedita atque at doloribus accusamus?
         Nesciunt voluptatem at, iste eos ducimus soluta adipisci qui minima alias voluptas nobis saepe neque vitae voluptatum. Dolor beatae ex veniam. Recusandae odit unde deserunt eligendi nesciunt libero, aut voluptates!
         Repellendus autem optio nesciunt natus? Veritatis consectetur quia ullam! Sapiente, ducimus aliquid ipsa esse ullam commodi deleniti, sed velit error unde pariatur ipsam voluptates ex eum, sit voluptas repellendus vel!
         Cupiditate dignissimos officiis maiores, incidunt, voluptatum quo voluptatem ad dolorum consectetur eaque recusandae totam rem obcaecati repudiandae saepe fuga necessitatibus nostrum! Expedita nihil animi commodi, qui eaque hic beatae sed?
         Cumque laudantium quos rerum repudiandae quasi quis mollitia corporis nemo explicabo molestiae harum fugit enim eveniet eum inventore excepturi totam ipsa corrupti odit, quibusdam laboriosam voluptatibus! Ipsum tempora velit officiis.
         Sapiente, recusandae. Blanditiis dolores tenetur velit alias neque corporis ratione accusantium omnis dolorum, cupiditate aliquid distinctio nemo, asperiores soluta! Velit omnis numquam aliquid voluptatibus? Laudantium iure veritatis ea sit quaerat!
         Quos quidem optio placeat aperiam! Alias odio temporibus voluptatibus eum cupiditate suscipit fugiat laboriosam fugit minima incidunt totam, delectus iure fuga nemo aut repudiandae, quas libero expedita, dignissimos praesentium perspiciatis!
    </div>

    <footer>
        <div class="footer-label">Let's Connect</div>
        <div class="social-icons">
            <a href="facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="x.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="in.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="mailto:neelsavani7@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
        </div>
        <p class="ftr">© 2025 Team <b>ABHYUDAY</b>. All Rights Reserved.</p>
     </footer>
    <button id="scrollBottom"><i class="fa-solid fa-down-long"></i></button>


    <script src="../js/scroll.js"></script>
    <script src="../js/menu.js"></script>
</body>
</html>