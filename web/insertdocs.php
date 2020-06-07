<?php

session_start();
error_reporting(E_ALL);

function generate_name()
{
    $char_start = 'abcdefghijklmnopqrstuvwxyz';
    $random_string = $char_start[random_int(0, 25)];
    $w_length = random_int(1, 3);

    for ($i = 0; $i < $w_length; $i++) {
        $name_len = random_int(4, 12);
        for ($j = 1; $j < $name_len; $j++) {
            if ($random_string[-1] == 'a') {
                $chars = 'abcdfghijklmnopqrstuvwxyz';
            } elseif ($random_string[-1] == 'b') {
                $chars = 'abdehimostuy';
            } elseif ($random_string[-1] == 'c') {
                $chars = 'acdehikmostuy';
            } elseif ($random_string[-1] == 'd') {
                $chars = 'adehilmostuyz';
            } elseif ($random_string[-1] == 'e') {
                $chars = 'abcdefghjklmnpqrstuvwxyz';
            } elseif ($random_string[-1] == 'f') {
                $chars = 'abdefhilmostuyz';
            } elseif ($random_string[-1] == 'g') {
                $chars = 'abdeghilmostuyz';
            } elseif ($random_string[-1] == 'h') {
                $chars = 'abcdehijlmostuyz';
            } elseif ($random_string[-1] == 'i') {
                $chars = 'bcdefghjklmnopqrstuvwxyz';
            } elseif ($random_string[-1] == 'j') {
                $chars = 'aehilmostuyz';
            } elseif ($random_string[-1] == 'k') {
                $chars = 'aehilmostuyz';
            } elseif ($random_string[-1] == 'l') {
                $chars = 'abdehilmostuyz';
            } elseif ($random_string[-1] == 'm') {
                $chars = 'aehilmnostuyz';
            } elseif ($random_string[-1] == 'n') {
                $chars = 'aehilmostuy';
            } elseif ($random_string[-1] == 'n') {
                $chars = 'aehilmostuyz';
            } elseif ($random_string[-1] == 'o') {
                $chars = 'abcdefghijklmnopqrstuvwxyz';
            } elseif ($random_string[-1] == 'p') {
                $chars = 'aehilmostuyz';
            } elseif ($random_string[-1] == 'q') {
                $chars = 'u';
            } elseif ($random_string[-1] == 'r') {
                $chars = 'abdfehilmopstuyz';
            } elseif ($random_string[-1] == 's') {
                $chars = 'aehilmostuyz';
            } elseif ($random_string[-1] == 't') {
                $chars = 'aehilmosuyz';
            } elseif ($random_string[-1] == 'u') {
                $chars = 'abcdefghijklmnopqrstvwxyz';
            } elseif ($random_string[-1] == 'v') {
                $chars = 'abdehilmostuyz';
            } elseif ($random_string[-1] == 'w') {
                $chars = 'aehilosuyz';
            } elseif ($random_string[-1] == 'x') {
                $chars = 'aieou';
            } elseif ($random_string[-1] == 'y') {
                $chars = 'aehilmostuyz';
            } elseif ($random_string[-1] == 'z') {
                $chars = 'acdehilopqrstuxyz';
            } elseif ($random_string[-1] == ' ') {
                $chars = 'abcdefghijklmnopqrstuvwxyz';
            }
            $char_len = strlen($chars);
            $random_character = $chars[random_int(0, $char_len)];
            $random_string .= $random_character;
        }
        $random_string .= ' ';
    }
    return $random_string;
}

$practices = [
    'Cardiology',
    'Dentistry',
    'Otolaryngology',
    'Gynaecology',
    'Orthopaedy',
    'Paediatric',
    'Psychic',
    'Oncology',
    'Neurology',
    'Dermatology',
    'General',
    'Allergy',
    'Surgery',
    'Opthalmology'
];

$hospitals = ['bduhiqubyl ', 'keruh ', 'jivlzr luozora bamz ', 'kouakocuy iupuovthe idmzlh ', 'rzcsu ', 'iuoebu fsy ', 'puachobsmiw hylihc kanltzs ', 'vlla jhsh jztyuzty ', 'lojum ', 'eaqugte ', 'fyiyldohz teep ', 'shdszdtafumo lihy jouzso ', 'cmlaqubs ', 'wiryep ', 'vsusha ', 'byteee ', 'nyhioqudys ', 'casmelzposap ', 'tlset ', 'muq xujsupiff cmysu ', 'ihtanaac wont ', 'ovddzcd mhb laachhoaoy ', 'bukz aw ', 'oecme ayilz ', 'nhonesikuy hjmtzc ', 'cmhjm yz ', 'imusmadilsy ltzyhur pyamhl ', 'ejtuxozz ldlewu ', 'xikhstymhld irahy yaa ', 'quog rsaphdyset pamlle ', 'larpts eyz ', 'bdyuje ', 'owipubyszu ', 'kmyhsm ', 'qubb awsosthai ', 'sslu ', 'sollta noipy xiefyhtelu ', 'wayatuotmt ctysmao ', 'eheneju uhamaklbsu aglmoze ', 'byysleggana chc itholyav ', 'lymivd rzqusub zpirfhai ', 'ocehtegsl ', 'hcagilorfiz nayyixi vmlbbuyo ', 'apsep ', 'jyajs chi gludmll ', 'atyenone xifba nhchj ', 'vltst seryhci ', 'quxecti lukmubyag ', 'nyohmy ', 'yuze mtzsltsszz vsahtiexi ', 'fhjz ', 'gezqu yhun ', 'nuxackldakld ', 'psldepun ', 'toufthszd elsziphd ', 'uxontsy ', 'ntha ', 'vuvi ', 'uldldiq ', 'iyyukzt ptmsa ', 'ptec sms qudddzisa ', 'vdziv ', 'ixes afb ', 'yeai ', 'gtho toipsich wanmentmiw ', 'yizhlzzpmm ', 'ymzicuxio damstolle naah ', 'qucmolbof zs ', 'quoyumib umntyuxoop javuytebo ', 'poamnooza bbby ruhhabyl ', 'tlddtid ksysokau ', 'vubyh ivahcy ucsolajoeu ', 'qufyetoco ', 'quoney sugo ', 'mtzy kzyhhzccy exujzrf ', 'cejisujzugz hlyi nmszz ', 'wsurbbej bmtu ftstec ', 'oloc wijif ', 'bagseudddt zta jooyu ', 'pourzetladt ', 'sytlhd yhhupotos ', 'xizitazllb corsmn emtex ', 'xusuedzid uejox yulaa ', 'lymaccsiqu yayzquhbmte ', 'geggg nsmog ', 'gtsmzizyiv memup vymhl ', 'muhb kazodo gyyufeths ', 'xuexelhenl kinugoctz oq ', 'vtslltsm ', 'axuat q ', 'eevesysic qufbsizubag ', 'bayarl ebhogs wlloqu ', 'zhhhtysil cyl ', 'leb wobtojses ', 'phat ocss ', 'sizrmzc ellb ktoqunas ', 'bmona zrmlaxid sami ', 'hzegiu daa ', 'ytytl rpma ', 'oubighh ', 'nyhjz bhlstzopag ', 'iwsayl ', 'tmeztidyewh kytsszyifdt koa ', 'secarz ', 'qup ova ', 'pelzpopzuky wogge vukacto ', 'texuossefdm yzzx ', 'rmtulhby ', 'xeslih gzyyocuig fals ', 'thavhojzrby igyuiysah zaslhmty ', 'wstot chiuewy ', 'jiyhanof woowi kay ', 'rzdlmmhboh vyopagyl xoum ', 'ctexag ', 'mlbs lobbiogol ', 'heflh dzu ', 'piws ', 'nhhouwh ', 'xazymshali bupau ', 'inyhyzisid vbepymodavt ', 'iwotsylb bsldstyllib ', 'nord uniqukyo ', 'jmnuhmzuomy ish ', 'kistoostuwic dsllai dsugs ', 'gguklhucmum ihth ', 'qukad ', 'fsiko ', 'epeq ', 'kylutaabove jsmte ', 'lhlszrotlslt zpszquly ', 'izzazzz puev dml ', 'nayzquh giqux ', 'uzxutmaga umtonlots ', 'ecaalays ediefzehmy nmzc ', 'hdzchuvd ssawldt kuklsyewz ', 'puokuoylen ', 'kmihdtetz mzubmhmsiee ', 'tozobeucdmh yzyeg yoq ', 'ophmtmiyaje unesme yaacace ', 'wejstzoftms ', 'epoe ', 'ikyl ', 'uddao phubdlbsh kizumh ', 'mohmseguz ', 'zquahcakh ', 'fomatyuiply uctacuth leghafea ', 'etucejyll ', 'ibbd aiyyhixeh ', 'axad vdeysijh ', 'pzedhoudl ', 'zremy yuemurafy ', 'bsah lmtisozobay xeawsokzz ', 'yeked ', 'exomexo jzafanmll ', 'pioecaplion ', 'ooxequao adhymivhi ', 'nloiptyaf wixug zhe ', 'msleupocmn ceymlya xe ', 'yoyst oafoq cszr ', 'rszzqu ymt duzsaf ', 'xiksor ', 'wztlb aat ', 'ldiluli qubtyyokhu kukltsstmhm ', 'vseyt ', 'ptslahhej poalecmhi ', 'mtelahsigtar gtaomto ', 'igobme wlt lmyaguahc ', 'pszrejeaxohy ', 'qufbuxelau secujej zewyy ', 'xiks pszct fyhctlhhh ', 'akea ', 'poqufag pzuebosmefi jikevdmtoze ', 'ylitslhluwao tilyuhchmn ', 'zqulymuew termyoamnu ', 'yhze ', 'jtyeyupoq ', 'egamtebe ', 'wsogepu ', 'tyihthcs cdzcu ssewi ', 'bysinowet ', 'ehhbyy qulmuyh nefofb ', 'kltylujmzsh ', 'gavlt vizh vtoushabyz ', 'wihbt ', 'jivbslm ebelzhdt wekuf ', 'quzps jymstu ', 'dthzetui plhbh ', 'seruh qupaquk ', 'gausoxorptyu ', 'jsine ylyuj weac ', 'jhitiyzeyy vafmhjst abtmoq ', 'rmmz god xovlujyy ', 'tiuoehb bditomz daphtzctzp ', 'nusogzabssa ', 'vsyysldm ulls ', 'bsakmhuso ythbtab ', 'heunytukl jaghjukmm maklen ', 'iya aie athdun ', 'vhjouxillll xuw pzhyl ', 'arloutul ', 'sezlboaq jymzcet ', 'xapymhmal jonawhbyll ', 'psefb yszolmz ', 'jlsazdmayo gslodaxuwud ', 'klmamzit usyshcdlma ', 'bhymselutys lhz ogt ', 'ckuwustzhh gsisyim ', 'lebaq ', 'wlbdtzpsik mnyhd ', 'utucefas anssla ', 'vusavztajtl gbsoslsuy ', 'gifbhuw nebomasub ', 'ifassonytmu kslmnhyllla ', 'sacmiyyaoely romtodivya ', 'wuilday fltivszys ', 'xadobylmojz dzdl qumz ', 'xenlaog ', 'nhtld jzx etmeh ', 'epegufdzd ohekaymahoz ', 'qupt foeuvdshl ', 'suwizquzrl ', 'ftsa azpts ', 'saf ', 'pyojsa zsadszr ', 'vdtoj imsiyo ', 'wleymz cuikmy uxi ', 'mutsh ewunye ', 'yerzz ', 'qupoife quj ', 'mzyuklo unyevhth ', 'emnef ', 'gzccdatlinl zylenhdesz ', 'calu ', 'cely dhd ', 'mhcanhz uajser ', 'pzqu tsite woehhipl ', 'unub rtytm gbtlzxiuh ', 'mujehsz zuvuwszl oupep ', 'dddte ab ', 'dtusexes bus vtowatucokz ', 'qucolsyluhys qut ', 'nmeyhugllol ', 'bbif oflah ', 'repeal rimsuaumo sylyyudih ', 'weapexeuh ', 'gonsesm ', 'uqujzi lobb ', 'zdavy ', 'ntoj rzrlddsle osyheazyowa ', 'quglzpagyahy fylojsmtzpm ', 'rtzyh onsiqulisa ', 'zquzqul censzyhzd ', 'mntm otlhmod dehmnuquto ', 'verl ', 'hibhztipor ytmotuztm szp ', 'wlhz zyewh ggodltey ', 'guckepm rpmehl ', 'wsetat dosltl thcymlmyab ', 'lbusev ue ', 'ntesyst ', 'etaqut epe ', 'vlituh dzlanm ', 'xovmluwo pyuxiqunl ', 'ucetz vlysuphjmo vzxaqu ', 'jsigmoeci quzq mi ', 'nsudsl shdmtmzyhu ', 'eabhes onmi gieq ', 'rsyexanlue jyzenmizzs ', 'sszsmuooponi ', 'ipoquw bohtl quxuy ', 'tucyzoewic edhy ', 'eenllurajtmm fhlijuaw ', 'mexuhszysmy ', 'vbusivtmuf quwhsli ', 'iexudmusl woobu nemej ', 'vutohomt uvleaha ', 'orhizokyebu ', 'kemyid cuvbizsyl mlbivzhi ', 'vsaurexuzou qutocmta ', 'ayeeds tanov zyaot ', 'xelhlohuz jinl ijoktm ', 'shlbye ', 'wssmnovb weumy ', 'quizoudd uequv ', 'qumme huodzzhuew ', 'vdssz ', 'zrdewuif ', 'nemnam yhszaf oliplyi ', 'rfloxahy ', 'uocisi pmeraadouma ', 'ebtaiew ', 'ldzhteuooa ', 'mlbmzyzcysu ', 'ktootlb mzs itophs ', 'cutstsolmn rhheltl yhsmie ', 'zcmsyaftm vbie ', 'kltevip ', 'zsloijsacy jhjzckszlt pmi ', 'wahecufmsuv ', 'gmeeuqumy cdtanlbys ', 'vortlhozyo laoq ', 'dumsszdagte ', 'efld koz ezdsajmhzal ', 'ughhcts tunav ', 'ewhe paja bassun ', 'cmara ', 'amuwhon cmnmob pat ', 'ovmtoctzzo ', 'uiqukurm ', 'jyymikafzc ', 'uinoab ', 'cozlt ripalbueso redoymapuf ', 'chli ', 'iymteyuob mnat ', 'bbuzzpavm ', 'htzxahmo lmidlh ', 'rikyupavi ', 'mzhuavbdt ', 'hcmucc rst ', 'guszu ', 'kupukmhte gymlakzs ', 'siff ', 'gsewhsms thuyhzefdd ', 'qus ', 'llbdshcolslo waoxorlyhs evbhip ', 'ephah jotzodyuw ibhmeszozlu ', 'gzue ', 'bokusekan quaq kmtsm ', 'rduicuvytaj ', 'ioipzhzuo ivm ', 'jsly wsunuge ', 'fugews jslyme wyanhiofi ', 'mzigz ckoqu ', 'jzieyyutow ytanlde hzd ', 'safbokhcha ', 'kaztzxa titltlmo ', 'nszeq wuyoomouo ', 'ohizrurid gdenmsir fzegb ', 'vtl cdzub ', 'dhicsaflmm wyyodare guz ', 'mierupsts ', 'gsahtuby ', 'zxav aqu ', 'aptufthtoxa fueawu jupo ', 'tmhiquigi ijtlltaph ', 'igtyiwhdoh ', 'apzet ', 'pmifididzdhe rolmmi ', 'ylexaa ', 'plztyliy stuzzlti ', 'lie aylazuoofzh ', 'girdhjyahi neva ixocyhzro ', 'jhhue tzt ytz ', 'wewe edaleetulb ', 'thmz kszop inmi ', 'nyuqubi zcmud urtuosy ', 'muwzeklb yyiq qunalhs ', 'xalowabeyidz cmmiktoth yszici ', 'plsyaptyh dog yenmmej ', 'kmmamawhh qusehhe uxotibuz ', 'piobansmmh ksz womejtsaj ', 'etsyosuri ', 'myinh gmevavsagel ', 'zhcsiof ', 'xofzajlekso mn ', 'yaivi ', 'oizd ', 'ayztzq psht whzcheg ', 'nyymex keff dylh ', 'cuyin ', 'ivonepmhb ocsudl bbhh ', 'lyh phzd ', 'cuevbyiq we rmocics ', 'dequ glilzs ', 'xeccm ', 'wheutho ymzzcyiq ', 'gseaapipen plikt pyhjawsa ', 'xuidotllhd noi ', 'dmoghztijupa nozhmn ', 'bdsakirbub nyizden gooamumuad ', 'sluftht gdovoazct kuibtolt ', 'rfmnhc ', 'kohj ', 'ulyautazq xenaz ', 'cyaiw pmsyyexa ', 'ddagy ojtsl ctmeeuifanm ', 'uqu ubaowuszu ', 'yeyytyute llenousuj ', 'caylyh ', 'ktlz fal ', 'iyhbe ', 'ivddursmlbu ', 'quwszici ', 'bhtlshtzdl ', 'lexokivl ubdhiwzzp ', 'hmtls yllux ', 'jearfhde ayz tiuil ', 'wyhhs juvbhz vimzzazan ', 'xich ', 'bahhdolikuan cmho ', 'usorsufo yiq ', 'muztevec jlzlanmyod mouavbst ', 'mzyaq lasa ', 'rubyyminhe fdmnabtaxeg ', 'cdocuit quht rzztm ', 'jowe ', 'bdzeb ', 'ivmhhslssoq ', 'biwllmh zxouptzofyh ', 'iecobegl ', 'ajezax dinowufho ', 'biymhcotlbd ipaovta cafz ', 'awuy equzaoq ebmzl ', 'qupte folirh ', 'xeuzuw ', 'ylyev ', 'xoaoturdt letszz wixecyuzdt ', 'yibaztzddz ', 'iwaflhshosm ikl ', 'cemhc quw ', 'gbilt ', 'iwzcyszoboi ', 'ipllucequc ', 'ylubumyofe ', 'dyussen ksh ', 'uarafbbezte cotyhaboy unt ', 'whlmoa ', 'hlmu ', 'xusevbts cdhltibm ', 'xaht cyequku evelodewey ', 'dyzoaku epo gueh ', 'fbouojtarekl qultslo ', 'stinuhjit vdlozhbart ', 'pltliedeq isarasysm ', 'fiusmakets makyesiuc uwsaxuduzo ', 'ufyueksuems wllbdml vmedoff ', 'ijszyun gslaj ', 'damyson uddowikztul ', 'awztl bssihaphb wiet ', 'tzichbim stlanhsior dosi ', 'mhbaislmu fuovh ', 'quvejoplzl wyib ', 'joslsztuml dlhunlbtioh ', 'xorfmmhyoj hile ', 'hlsmztuit marogd ', 'ptin yix ', 'quer cewujhzxo ', 'quctyms exith asibti ', 'ylhbhcyhje tmudef ', 'ffdt ciou ', 'eriqu ', 'xifdldo gzsle vmzha ', 'eyaalen ltaponh ', 'tuvih ', 'qubyararht ', 'surmsozd ', 'ejtui zzphjs ', 'hleu tie wupzsludu ', 'lats ', 'kzpunh zzelsu ', 'ddsot hlackuktesl ', 'burulaq sozrhccho ', 'ntoadsyi veabbd bdht ', 'rpmarac gehiwesacob ceeme ', 'bbhdtabis nme ', 'jeylirefifiz dafi ', 'libadszcibaq jubdiduo wusmiyude ', 'rosex ', 'icawob ', 'zcmhjmtimo ', 'ihaabo ', 'tzythdtum vafyzlol zosozt ', 'nhiojt ', 'suitomlhzes ', 'telesu ', 'fmzicuaok mnty cobty ', 'iqumaoeea ', 'jthcssiqus hzacmexaili soquhmuldl ', 'iquiobd mzuikyaqudi ', 'lbteci jikep ', 'heflbej ixo wadlurpog ', 'tmzp llye ', 'ciq zdi vo ', 'ohdlb fzsenowzpl khbhdlo ', 'zaxudze es yltmlslm ', 'wivylzyy zxibup ', 'qufdag ', 'nosortm pmirs ', 'kaszq ', 'duml ', 'nlilsszccs lsls ', 'uozzrymoza ', 'vlebmsllay szrfizaw zcthohm ', 'ostee ', 'tlaodteyeuju utmhjl ', 'fysyzo yzonyozog thhocmi ', 'maaato paatucahy ', 'quaa ', 'ythioym ', 'bbtzl qufm rdoumstey ', 'jhdatzsh ', 'yzlzuyaaz utekovtoquv ', 'bmoximzq fmnt ', 'ggbbugszlmt xic bayexoekik ', 'orszlu vyldulus ', 'fzujiquwhdh zcshbs cyzs ', 'tifolbogggm dmyiw vigm ', 'ojibowso arz ', 'xafigihy iolbo xahdthuhym ', 'yzstejt ', 'egifbughys zzo ', 'zivanonuwli ', 'uomztmtzp ', 'ouvot ', 'goofldy ', 'xowokyulhm ', 'psutmtmte ', 'apstugb slytijh ddaiboior ', 'ilhi ', 'ohdmhaizqua iksmte ', 'ymoowyol ', 'btaxikuis xomhbytz ', 'nytlawiva tlhjust ', 'vzxamsiz ', 'jaarlawl cdsajs xef ', 'jteguzq ', 'pakli kyin dikmtuahc ', 'ijiu lsu ', 'mmld fdh ell ', 'gltzrpmm foagdixi ', 'yazsyes odsohokh cduxe ', 'zzaxas ', 'rptiegy ', 'gssorowy ', 'tymhyu ', 'lhzrmeyodaa ', 'ragg huvuot zymhjlssll ', 'qushi ', 'bdyur ', 'quyibauoky tlasss khsiumiwux ', 'pelatavsl ', 'mevye bbsajyedh ', 'smsaq ', 'xoytulmty othytumnyh susuvicdm ', 'pumomnhbsuf miq corh ', 'vijm fhbazaw xedarhlut ', 'nmmyledaago cevlsavzp ', 'oejsu jac ', 'mmusmoucy xe ', 'chjllszte vddhlmtaixa ackiuxiyejy ', 'xijatl ', 'pmeyiucdou yuqudz roophji ', 'bsozdyec ', 'owltunajeq irzzecsmo ozy ', 'bosmid ', 'nukzsah psirz htuowzict ', 'dtecysee vonibt ', 'jabeflte iuobert ', 'hdags wliquex ', 'bmiyiyunede ceuxafadl ', 'vlbh nupofs tlbt ', 'iyyhopipst ', 'agmysten gbmomlzoisl ', 'afmenaz yzzuvix hacs ', 'pzossthe dhmhsyi ivicy ', 'bifowhecm pmthiwana zzq ', 'mthdoh ', 'uckz ', 'smmagmmlipeb ', 'phtsoqu ltzxeb ', 'udsyu ', 'okmltlowuh ivy ', 'nhuwisyhus fequxa ', 'myyldoxuxij xarzq ', 'nmemytijyu ', 'igddmhbss rheneereq yhtun ', 'gbopaamoq ', 'uvowzs ', 'bhyyszpeushj hyerehciwi uthy ', 'hesuquthjmo eluizaofzxe ', 'bedmubmifma ', 'rlefyadagmi jsyzyylace ', 'yugbifaalhs ', 'guhthlz ', 'bufsumlytso nanermysmyt ', 'pheme ', 'diwzckmnek ddmtmoy ezomnl ', 'mntuby uhounyekmi dequopihd ', 'fonefmlemy ', 'kmsontzcy ptll ', 'ujssotzquo ', 'toqub ', 'ajicmzltzuie gekme ', 'ovdtlanlo ', 'mllslucua ', 'xiv ic ', 'jmatytm pif nald ', 'quhztyuenta xifbukethl byzejm ', 'lzebugbyules ', 'nebequhhy baps pzxueyofl ', 'aadegd oddd lizdmau ', 'ecar nlauce ', 'nipamupz ', 'zanmo ', 'cdmnl ktsilhzi ', 'fzd ', 'zzhhlyy ', 'lminy ', 'ytef fbsaiyej ', 'yuhc ', 'jeq jub ', 'ajipurixa ugaf bb ', 'zekaurmtsu quxiny axivtocyzob ', 'ltminayhhl gteave ', 'rlbtyel ', 'nuklzadlymz ', 'zrfuimoox mlirujekz goq ', 'tevd dharlshuhu sll ', 'lokejokhdl umzssm wyamll ', 'xozojzteudma waxec altawssav ', 'vszcaiq xokiho zouw ', 'depau xucaiw ', 'xajhurzxi mhc nhjeb ', 'zoakalbsaqu didulloc ', 'fearfl pzquryzl okuymozah ', 'valllhy ', 'unollieka ', 'dzutiy kmnl yhuouqum ', 'gzxabdsh ', 'jzhuisi qusill ', 'szhipoey ltya ', 'yibbi emhd plzlosoohsi ', 'xuco quviv owlszxeeai ', 'hlysiyhj ', 'smmmaxarmna ', 'veb mibdsmymu ', 'ashta ads ', 'okllo vtek ', 'cmics bmyigu ', 'quhjy cuvujt dzxuxalayz ', 'wlbesi ', 'gguequzun hzzubixoy ', 'jyzzomuera rakuj ', 'ihewlms wyhaqub erfzujao ', 'shayiw slbytar ', 'pldtm fuyuve xiny ', 'yhsix qufti ', 'ditliw kawsovib ytsy ', 'wuestztylo ', 'stissefeuj wuktohe nazq ', 'hyhhm ', 'mytiquket acoszauhm erhin ', 'gdslmzu ', 'qunogy ', 'tyylmne awzx ', 'pliyeavdi ', 'ikmsythunhd ', 'fuin ', 'rdawhmu axikoesme iwhc ', 'myhd ', 'yohevuwlyi ', 'nifbbesllok ', 'xojluoq ', 'zeap ', 'ffduyztu ', 'rufzxepzhau ', 'xixiglza mys irlzsla ', 'julivtzyax xovu jaryuslbdhy ', 'jhcmicecke ', 'wzicemyesh ofdstiq ktirztztav ', 'wsszuzly ', 'rstupzaw ', 'hohmillosoh lhbs mslmnak ', 'odmh lequo ', 'ldapokzdy wstic jz ', 'xerm ', 'yooecawene ', 'werd ', 'vegebag ebukike ', 'rtiujyte ', 'sshtoa ', 'dziff ', 'shmapeca kymnlla ', 'aghlteps vuzquf wyomlbi ', 'jtmuip mytl mliqunldyl ', 'jmsalanajzc hduddlufol bhbmmah ', 'ftymhbe flsesh ', 'faxa filo rawouqu ', 'raymobitloxa ', 'thicyyiklml alivaxati gdirsutu ', 'xatopee ', 'hdlmylmlmyh ', 'fdyiwhctz nupaidhiebh aglbyat ', 'yzusenthm ', 'ntzoxuteu rujemi ', 'jimo yzdslmh kllsythju ', 'yyosl ', 'obmooby quve ', 'taiwasmls ', 'mevefefs ', 'hlhivicoh chyeh oio ', 'mily rix ', 'nymn vbtashmzuki ', 'wyyztejti ', 'ghmt ', 'kzqune vlyzckliy ', 'tsmi ', 'nteyo zqutohiqu ', 'yerij ekupe ', 'jmab valsz aylz ', 'kixoz mhapst pasobyano ', 'dubhu stunh rfmamsmeba ', 'dthainehzpt ', 'vlbsyheelhc vhbooxops ', 'ylzrly utyilbsoneh ', 'ctya ', 'sefm ', 'zutemev nallezdt ', 'hyemmn hjmhbtyio ', 'tymlbugodsl ejozoafi epudotys ', 'plerouhtak fbt ', 'dhoj bsahht juihsst ', 'euyuxuqu gafhmal ustlstz'];

$addresses = ['London', 'Paris', 'New York', 'Tokyo', 'Barcelona', 'Moscow', 'Chicago', 'Singapore', 'Dubai', 'San Francisco', 'Madrid', 'Amsterdam', 'Los Angeles', 'Rome', 'Delhi', 'Boston', 'San Jose', 'Toronto', 'Washington DC', 'Zurich', 'Hong Kong', 'Beijing', 'Berlin', 'Sydney', 'Las Vegas', 'Mumbai', 'Frankfurt', 'Miami', 'San Diego', 'Seoul', 'Prague', 'Munich', 'Houston', 'Milan', 'Dublin', 'Bangalore', 'Seattle', 'Dallas', 'Istanbul', 'Vancouver', 'Melbourne', 'Vienna', 'Abu Dhabi', 'Calgary', 'Brussels', 'Denver', 'Doha', 'Oslo', 'Orlando', 'Austin', 'Stockholm', 'Montreal', 'Philadelphia', 'Brisbane', 'Atlanta', 'Copenhagen', 'Saint Petersburg', 'Perth', 'Minneapolis', 'Lisbon', 'Venice', 'Portland', 'Hamburg', 'Tel Aviv', 'Kolkata', 'Lyon', 'Florence', 'Stuttgart', 'Luxembourg', 'Edmonton', 'Osaka', 'Auckland', 'Ottawa', 'Budapest', 'Helsinki', 'Athens', 'Cologne', 'Bangkok', 'Charlotte', 'Phoenix', 'New Orleans', 'Baltimore', 'Valencia', 'Manchester', 'Nashville', 'Salt Lake City', 'Dusseldorf', 'Sao Paulo', 'Rio de Janeiro', 'Raleigh', 'Warsaw', 'Marseille', 'San Antonio', 'Birmingham', 'Columbus', 'Shanghai', 'St. Louis', 'Detroit', 'Sacramento', 'Milwaukee', 'Kansas City', 'Tampa', 'Nuremberg', 'Bristol'];

include 'mysqli_connect.php';
$loginQuery =  $dbc->prepare('INSERT INTO generallogin VALUES(?, ? ,?, ?);');
$loginQuery->bind_param("ssss", $uid, $username, $password, $type);

$doctorsQuery =  $dbc->prepare('INSERT INTO doctorsinfo VALUES(?, ? ,?, ?, ?, ?, ?);');
$doctorsQuery->bind_param("sssssis", $uid, $name, $practice, $hospital, $address, $contact, $emailId);


    $uid = bin2hex((random_bytes(4)));
    $username = bin2hex((random_bytes(random_int(2, 4)))) . bin2hex((random_bytes(random_int(2, 4))));
    $password = bin2hex((random_bytes(random_int(2, 4)))) . bin2hex((random_bytes(random_int(2, 4))));
    $type = 'Doctor';
    $name = generate_name();
    $practice = $practices[random_int(0, sizeof($practices) - 1)];
    $hospital = $hospitals[random_int(0, sizeof($hospitals) - 1)];
    $address = $addresses[random_int(0, sizeof($addresses) - 1)];
    $contact = random_int(7000000000, 9999000000);
    $emailId = str_replace(' ', '.', $username . "@" . $hospital . ".com");


    echo ("Username - " . $username);
    echo ("<br>");
    echo ("Password - " . $password);
    echo ("<br>");
    echo ($type);
    echo ("<br>");
    echo ("Name - " . $name);
    echo ("<br>");
    echo ("Practice - " . $practice);
    echo ("<br>");
    echo ("Hospital - " . $hospital);
    echo ("<br>");
    echo ("Address - " . $address);
    echo ("<br>");
    echo ("Contact - " . $contact);
    echo ("<br>");
    echo ("EmailId - " . $emailId);
    echo ("<br>");

    $loginQuery->execute();
    $doctorsQuery->execute();

?>
