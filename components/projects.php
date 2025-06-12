<?php

    $projects = [
        [
            'title' => 'Travelgram',
            'description' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
            'image' => 'assets/travelgram.png',
            'techs' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'title' => 'Página de receita',
            'description' => 'Página com o passo a passo de uma receita para cupcakes',
            'image' => 'assets/receita.png',
            'techs' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'title' => 'Tech News',
            'description' => 'Homepage de um portal de notícias sobre a área da tecnologia',
            'image' => 'assets/technews.png',
            'techs' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'title' => 'Refund',
            'description' => 'Um sistema para pedido e acompanhamento de reembolso',
            'image' => 'assets/refund.png',
            'techs' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'title' => 'Página de turismo',
            'description' => 'Página com as principais informações para quem quer viajar para Busan',
            'image' => 'assets/turismo.png',
            'techs' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'title' => 'Zingen',
            'description' => 'Landing Page completa e responsiva de um aplicativo de Karaokê',
            'image' => 'assets/zingen.png',
            'techs' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ]
    ];

?>

<section class="pt-[72px]">
    <!-- titles -->
    <div class="text-center mb-[56px]">
        <h1 class="text-[#E3646E] mb-[8px] text-[20px] font-[inconsolata]">Meu trabalho</h1>
        <p class="text-[#E2E4E9] font-bold text-[24px] font-[asap]">Veja os projetos em destaque</p>
    </div>
    <!-- projects -->
    <div class="mx-auto w-350">
        <div class="grid grid-cols-2 gap-4">

        <?php foreach ($projects as $p): ?>
            <div class="flex bg-[#292C34] p-2 rounded-[12px] border-1 justify-between space-x-3 hover:border-solid hover:border-gray-200 shadow-lg shadow-slate-900 hover:cursor-pointer">
                <div class="w-2/4">
                    <img class="h-full w-full rounded-lg object-cover" src="<?=$p['image']?>" alt="<?=$p['title']?>">
                </div>
                <div class="w-3/4 space-y-3">
                    <h3 class="text-[#E2E4E9] font-bold font-[asap] text-[16px]"><?=$p['title']?></h3>
                    <p class="text-[#C0C4CE] font-[maven pro] text-[14px] leading-[140%]"><?=$p['description']?></p>
                    <div class="flex space-x-2 mt-18">
                        <?php 
                            $colors = ['#BB72E9', '#3996DB', '#E3646E', '#EABD5F'];
                            foreach ($p['techs'] as $i => $tech): ?>
                        <span class="bg-[<?=$colors[$i]?>] text-black rounded-md px-2 py-1 font-semibold text-xs"><?=$tech?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>