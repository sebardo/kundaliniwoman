<?php
namespace FrontBundle\DataFixtures\ORM;

use CoreBundle\DataFixtures\SqlScriptFixture;
use BlogBundle\Entity\Post;
use BlogBundle\Entity\Category;
use BlogBundle\Entity\Tag;
use CoreBundle\Entity\Slider;
use CoreBundle\Entity\Image;
use BlogBundle\Entity\Image as BlogImage;
use CoreBundle\Entity\MenuItem;

/*
 * php app/console doctrine:fixtures:load --fixtures=src/FrontBundle/DataFixtures/ORM/LoadFrontData.php
 */
class LoadFrontData extends SqlScriptFixture
{

    public function createFixtures()
    {
        //menu 
        $this->createMenuFixtures();
        //slider 
        $this->createSliderFixtures();
        //blog 
        $this->createBlogFixtures();

    }
  
    public function createMenuFixtures()
    {
        //Create Item
        $item  = new MenuItem();
        $item->setName('Kundalini Yoga');
        $item->setShortDescription('<p>Kundalini Yoga, 1968 von Yogi Bhajan in den Westen gebracht, ist das Yoga der Bewusstheit für Menschen, die mitten im Leben stehen. Es hilft, die täglichen Anforderungen tatkräftig, gelassen und besonnen zu meistern. Das Ziel dieser umfassenden Selbstschulung ist die Harmonisierung von Körper, Geist und Seele durch Haltung und Bewegung, Konzentration und bewusste Atemführung.</p>');
        $item->setDescription('<h3>Das Yoga der Bewusstheit</h3>
            <p>
                Kundalini Yoga, 1968 von Yogi Bhajan in den Westen gebracht, ist das Yoga der Bewusstheit für Menschen, die mitten im Leben 
                stehen. Es hilft, die täglichen Anforderungen tatkräftig, gelassen und besonnen zu meistern. Das Ziel dieser umfassenden 
                Selbstschulung ist die Harmonisierung von Körper, Geist und Seele durch Haltung und Bewegung, Konzentration und bewusste 
                Atemführung.
            </p>
            <h3>Jahrhunderte lange Tradition</h3>
            <p>
                Kundalini Yoga stammt aus Nordindien und hat eine Jahrhunderte lange Tradition. Die Kundalini ist eine ruhende Kraft 
                an der Basis der Wirbelsäule, welche die Gegensätzlichkeit von Körper und Geist überbrücken kann. Sie wird durch Yoga
                allmählich erweckt. 
            </p>    
            <h3>Dynamische Techniken, ins Leben integrierbar</h3>
            <p>
                Typisch für Kundalini Yoga sind dynamische oder fließende Übungsfolgen neben ruhigen Halteübungen und vielseitigen 
                Mantra-Meditationen. Die Lebensenergie wird ins Fließen gebracht. Das führt zu mehr Elan und Wachheit im Alltag und 
                einem bewussten Umgang mit sich selbst und anderen. Kundalini Yoga ist nicht dogmatisch, sondern wirkungsorientiert, 
                voll meditativer Elemente und Techniken, die ins Leben direkt integrierbar sind. Kundalini Yoga ist daher für Menschen 
                jeden Alters und jeder körperlichen Verfassung geeignet. Seine wohltuende Wirkung ist schnell spürbar. 
                Kundalini Yoga eröffnet einen individuellen Weg zu mehr Gesundheit und Ausgeglichenheit, denn es schult Körperwahrnehmung und 
                Achtsamkeit.
            </p>
            <header>
                <h2>Kundalini für Schwangere</h2>
            </header>
            <p>Viele Frauen lernen Yoga in der Schwangerschaft kennen. Kundalini Yoga für Schwangere ermöglicht durch gezielte Körper- und Atembewegungen, Meditation und Entspannung ein bewusstes Wahrnehmen körperlicher, geistiger und seelischer Veränderungen während der Schwangerschaft. Spezielle Haltungen und Übungen bereiten Dich auf die Geburt vor und wirken möglichen Beschwerden entgegen. Wohlbefinden und Körperbewusstsein verbessern sich, was dabei hilft, die enge Verbindung zu Deinem Baby bewusst zu vertiefen. Kundalini Yoga für Schwangere bietet Dir die wundervolle Möglichkeit, Deinen Körper und Geist besser kennenzulernen und das Vertrauen in Deine natürliche Fähigkeit, ein Kind zu bekommen, zu stärken. Natürliche Geburt bedeutet nicht der Verzicht auf ärztlichen Beistand. Doch eine Frau, die sich spürt, sich wahrnimmt und ganz bei sich und ihrem Kind ist, wird sich kaum verunsichern lassen.
            </p><p>Besonders in den ersten Tagen und Wochen nach der Geburt können chronischer Schlafmangel, die neue Mutterrolle oder ein fortwährend schreiendes Kind zu einer echten Herausforderung werden. Hierbei können die erlernten Atem- und Bewusstseinsstechniken eine große Hilfe sein. Intuitives und sicheres Agieren und Reagieren sind besonders in dieser Lebensphase entscheidend für eine harmonische Beziehung zum Kind und zu sich selbst.</p>
            <p>Jede gesunde Schwangere kann Yoga praktizieren. Ab der 12. Schwangerschaftswoche jedoch sollte sie spezielle Yogakurse für Schwangere besuchen, </p>
            <p>Gebären bedeutet Loslassen. Niemand kann den genauen Verlauf einer Geburt vorhersagen. Auch Frauen, die schon mehrere Kinder geboren haben, bestätigen, dass jede Geburt ein einzigartiges Erlebnis ist. Die damit verbundenen Empfindungen und Schmerzen nimmt jede Frau individuell wahr. Im Schwangerenyoga findet eine bewusste Reflektion und Arbeit im Umgang mit Emotionen, Ängsten und Zweifeln statt. Die Übungen wirken stark auf das Drüsen- und Nervensystem und öffnen das Herzzentrum, wodurch die Verbindung zu den eigenen Gefühlen wahrnehmbar und transparent wird. Auf diese Weise findet jede Frau ihren individuellen Weg, mit Anspannung und Schmerz umzugehen, anstatt ihren Gedanken und Gefühlen willenlos ausgeliefert zu sein. Eine Frau, die während ihrer Schwangerschaft gelernt und geübt hat, ihre Atmung und Bewegung bewusst zu lenken, wird auch bei der Geburt den Bedürfnissen ihres Körpers folgen können.</p>');
        $item->setVisible(true);
        $item->setActive(true);
        $item->setIcon('fa-heart');
        $item->setOrder(0);
        $this->getManager()->persist($item);
        
        $item2  = new MenuItem();
        $item2->setName('Reiki');
        $item2->setShortDescription('<p>Reiki ist eine sehr einfache und wirkungsvolle Methode zur Erhöhung der Lebensenergie.</p>');
        $item2->setDescription('<p>Reiki ist eine sehr einfache und wirkungsvolle Methode zur Erhöhung der Lebensenergie. 
            </p><p>Sie wurde im vorletzten Jahrhundert von dem Japaner Dr. Mikao Usui empfangen.
            </p><p>Der Begriff „Reiki“ (ausgesprochen Reeki) bedeutet die Verbindung der allgegenwärtigen göttlichen Kraft der Einheit = Rei mit der menschlich-polaren Lebensenergie = Ki. Andere Begriffe für Ki sind Prana, Chi, Orgon, Ka oder Odem.</p>
            <p>Wenn wir nicht in unserer Mitte sind, z.B. durch negative Erlebnisse mit anderen Menschen, innere Disharmonie oder Krankheit, nimmt unsere Lebensenergie oft spürbar ab. Um diese wieder ins Gleichgewicht bringen zu können, braucht es eine Harmonisierung und Aktivierung des Energiefeldes, wie es mit Reiki erreicht werden kann.</p>
            <p>Durch eine Reikianwendung fließt Lebensenergie wieder ungehindert in alle Lebensbereiche ein. Wir kommen wieder in Einklang mit unseren Gefühlen und erleben einen klareren, wacheren Geist. Gleichzeitig wird die natürliche Fähigkeit des Körpers zur Selbstregulation unterstützt. Reiki ist pure Lebensenergie.</p>
            <p>Reiki ist leicht zu erlernen und das Auflegen der Hände ist im täglichen Leben einfach anzuwenden. Die Reiki-Methode ist gleichzeitig ein Weg der (spirituellen) Selbsterkenntnis und der Persönlichkeitsentwicklung. Sie wird weltweit unabhängig von spirituellen oder religiösen Praktiken angewandt.</p>
            <p>
                In Einstimmungen wird der Energiefluss der Teilnehmer durch eine Aktivierung der Energiezentren (Chakren) nachhaltig intensiviert. Damit erhalten die Reiki-Praktizierenden die Fähigkeit, die wohltuende Lebensenergie anderen Menschen zu übertragen. Das Herz breitet seine Flügel aus.
                Es gibt bei Reiki drei Einweihungsgrade, die drei einzelnen Seminaren entsprechen. 
                Jedes Seminar ReikiHealing-Grad dauert ein Wochenende und bietet die Möglichkeit, sich selbst und anderen Reiki zu geben. 
                Man kann daran teilnehmen, ohne die Absicht, diesen Weg mit weiteren Graden fortzusetzen.
            </p>
            <p>Die ersten beiden ReikiHealing-Grade klären die Ebenen der individuellen Persönlichkeitsstruktur, zu denen der physische Körper, Gefühle, Gedanken sowie Meinungen, Einstellungen und Erinnerungen gehören. Diese Klärung dient dazu, die Identifikation mit seinen Mustern und Rollen zu lockern und sich jenseits davon in seinem Wesenskern zu erkennen. Der 3. ReikiHealing-Grad bewirkt eine stärkere Verbindung und Identifikation mit der Seele. Stück um Stück reift das Erkennen des Lebenssinns und es wird immer klarer, welche Vorhaben die eigene Seele mit auf die Erde gebracht hat.</p>
            <p>Das Herzsymbol hilft, mehr Liebe und Akzeptanz für sich selbst und sein Umfeld zu entwickeln. DasHalssymbol unterstützt konkret darin, seinen Lebensweg konsequent zu gehen und das umzusetzen, was als Lebensplan erkannt wurde. Das Weisheitssymbol schafft eine stärkere Verbindung zu den geistigen Helfern.</p>
            <p>Alle Reiki-Grade und alle Reiki-Symbole unterstützen die ganzheitliche Heilung von Körper, Geist und Seele. Somit hat die Anwendung der Reiki-Energie einen direkten therapeutischen Bezug zu energetischen, körperlichen und psychosomatischen Symptomen. </p>
            <p>AUFLÓSEN DER ANCESTRALEN KARMAS</p>
            <p>Karma ist das, was wir in unserem Leben durch unsere Gewohnheiten selbst verursachen, auf der sichtbaren-weltlichen Ebene und auch auf der geistig-feinstofflichen Ebene.</p>
            <p>Viele Gewohnheiten sind unbewusst und hindern uns an unserem Glück. Lösen wir durch untugendhaftes Verhalten im Leben etwas Destruktives aus, müssen wir auch mit den Folgen leben. Hat man in früheren Leben destruktive Dinge getan, haben wir unter Umständen die Wirkung davon in unserem heutigen Leben immer noch in Form von Gewohnheiten oder sogar sichtlich im Körper.</p>
            <p>Karma Heilung ist spirituelle Geistheilung. Man löst bzw. heilt Karma aus diesem und aus früheren Leben.</p>
            <p>Es geht darum freu zu werden von leiderzeugenden Verhaltens-, Denk- und Fühlmustern, damit man mehr Liebe und Glück im Leben erfahren kann.</p>
            <p>Im  Reiki arbeiten ich diesbezüglich . Reiki hilft durch Energieübertragungen sich von karmischen Altlasten zu befreien. Das Karma wird geheilt und das Leben kann sich verändern.</p>');
        $item2->setVisible(true);
        $item2->setActive(true);
        $item2->setIcon('fa-magic');
        $item2->setOrder(1);
        $this->getManager()->persist($item2);
        
        $item3  = new MenuItem();
        $item3->setName('Naturheilungen');
        $item3->setShortDescription('<p>Der Begriff Naturheilkunde bezeichnet ein Spektrum verschiedener therapeutischer Maßnahmen, die sich keiner technologischen Hilfsmittel bedient und die körpereigenen Fähigkeiten zur Selbstheilung (Spontanheilung) aktiviert.</p>');
        $item3->setDescription('<p>Im&nbsp;<a href="https://de.wikipedia.org/wiki/Hippokrates_von_Kos">hippokratischen</a>&nbsp;Verständnis, welches in Antike und Mittelalter die Basis der akademischen Medizin war (vgl.&nbsp;<a href="https://de.wikipedia.org/wiki/Humoralpathologie">Humoralpathologie</a>), wurde die Natur als&nbsp;<a href="https://de.wikipedia.org/wiki/Vis_vitalis">Lebenskraft</a>&nbsp;und als&nbsp;<a href="https://de.wikipedia.org/wiki/Heilung">Heilkraft</a>aufgefasst. Die&nbsp;<a href="https://de.wikipedia.org/wiki/Gesundung">Gesundung</a>&nbsp;des Patienten wurde durch die Natur bewirkt, der Arzt war lediglich Behandler:&nbsp;<em><a href="https://de.wikipedia.org/wiki/Medicus_curat,_natura_sanat">Medicus curat, natura sanat</a></em>.</p>
            <p>Der Begriff Naturheilkunde wurde erstmals 1839 von&nbsp;<a href="https://de.wikipedia.org/w/index.php?title=Johann_Baptist_Gross&amp;action=edit&amp;redlink=1">Johann Baptist Gross</a>&nbsp;in der 3. Auflage seines Werkes&nbsp;<em>Das kalte Wasser als vorzügliches Beförderungsmittel der Gesundheit und ausgezeichnetes Heilmittel in Krankheiten</em>&nbsp;verwendet:<a href="https://de.wikipedia.org/wiki/Naturheilkunde#cite_note-uehleke2003-3">[3]</a></pxd');
        $item3->setVisible(true);
        $item3->setActive(true);
        $item3->setIcon('fa-pagelines');
        $item3->setUrl('https://es.wikipedia.org/wiki/Naturopat%C3%ADa');
        $item3->setOrder(2);
        $this->getManager()->persist($item3);
        
        $item4  = new MenuItem();
        $item4->setName('Über Mich');
        $item4->setShortDescription('');
        $item4->setDescription('<p>
                Ich wurde 1982 als Kind eines deutschen Vaters und einer spanischen Mutter in Deutschland geboren und bin zwischen 
                Berlin und Andalusien aufgewachsen. 22 Jahre lebte ich in Spanien, wo ich im Jahr 2006 mit Hatha Yoga begann. 
                Das Hatha Yoga lehrte mich, dass das wahre Wissen in einem selbst steckt und ich realisierte, dass man erst vollständig 
                ist, wenn man sich mit seinem gesamten inneren Potential verbindet.
            </p>
            <p>
                Mein Interesse mehr zu Lernen und anderen mit meinem Erlernten zu helfen, brachte mich 2008 zumReiki, worin ich in Barcelona die Einweihung zum 1., 2. und 3. Grad von ReikiUsui Shiki Ryoho erhalten habe, dem Meister  “Paradharmadas”.
            </p>
            <p>
                <b>Seit 2009 arbeite ich mit Reiki und mit Bachblüten zur :</b><br>
                - Stressbewältigung<br>
                - Reinigung der Chakren<br>
                - Auflösung der Ancestralen Karma
            </p>
            <p>
                <b>2012</b> - lernte ich das Kundalini Yoga kennen. Fasziniert von den großen in packt was es auf einen hat, begann ich sofort die Ausbildung zur 1.               Stufe im Golden Tempel Barcelona mit dem Meister Kartar Singh Khalsa.  Zweimal besuchte ich das Europäische Kundalini Yoga  Festival in Frankreich und nahm 7x am Weißen Tantra teil.
            </p>
            <p>
                <b>2014</b> - Conscious Pregnancy und Yoga Doula - Ausbildung im Shunia Yoga Barcelona mit Gurujagat Kaur aus Frankreich 
            </p>
            <p>
                Naturheilkurs in Madrid am IPS (Instituto Profesional De estudio De la Salud).
            </p>
            <p>
                <b>Seit 2013 unterrichte ich :</b><br>
                Kundalini Yoga für Schwangere <br>
                Kundalini Yoga zur Rückbildung (für Mütter mit oder auch ohne ihre Babys) und ich unterstütze als Yoga Doula (Emotionale Unterstützung während der Schwangerschaft und die Entbindung )
            </p>
            &#8203;
            <p>
                <b>Qualifikationen :</b>
            </p><ul style="list-style: circle; padding-left: 30px">
                <li>2008 Reiki -Einweihung 1. Grad (mit 7 monate abstand)</li>
                <li>2008 Reiki -Einweihung 2. Grad</li>
                <li>2009 Reiki -Einweihung 3. Grad</li>
                <li>2012 Kundalini Yoga Ausbildung I</li>
                <li>2013 Naturheilkurs - Bach Blühten Therapie Menschen und Tiere.</li>
                <li>2014 Conscius Pregnancy “ Kundalini Yoga für Bewusste Schwangerschaft”</li>
                <li>2014 Kundalini Yoga für Rückbildung</li>
                <li> 2014 Yoga Doula “Emotionale Begleitung der Schwangerschaft und Entbindung”</li>
            </ul>');
        $item4->setVisible(false);
        $item4->setActive(true);
        $item4->setIcon('fa-heart');
        $item4->setSlug('yo');
        $item4->setOrder(3);
        $this->getManager()->persist($item4);
        
        $this->getManager()->flush();
        
        $this->get('core_manager')->addMenuItem('pic01.jpg', $item, __DIR__);
        $this->get('core_manager')->addMenuItem('pic02.jpg', $item2, __DIR__);
        $this->get('core_manager')->addMenuItem('pic03.jpg', $item3, __DIR__);
        
        
        
    }
    
    public function createSliderFixtures()
    {
        $core = $this->container->getParameter('core');
        $server_base_url = $core['server_base_url'];
        //Create Item
        $slider  = new Slider();
        $slider->setTitle('Non volutpat ex mattis');
        $slider->setCaption('Quisque venenatis et orci non pretium. Nunc pellentesque suscipit lorem, non volutpat ex mattis id. Vivamus dictum dolor metus. Aliquam erat volutpat.');
        $slider->setActive(true);
        $slider->setOpenInNewWindow(true);
        $slider->setUrl('http://local.com');
        $slider->setOrder(0);
        $this->getManager()->persist($slider);
        
        $slider2  = new Slider();
        $slider2->setTitle('Pellentesque suscipit lorem');
        $slider2->setCaption(' Nunc pellentesque suscipit lorem, non volutpat ex mattis id. Vivamus dictum dolor metus. Aliquam erat volutpat. Nunc pellentesque suscipit lorem, non volutpat ex mattis id. Vivamus dictum dolor metus. Aliquam erat volutpat. ');
        $slider2->setActive(true);
        $slider2->setOpenInNewWindow(true);
        $slider2->setUrl('http://www.google.com');
        $slider2->setOrder(1);
        $this->getManager()->persist($slider2);
        
        
        $slider3  = new Slider();
        $slider3->setTitle('Vivamus dictum dolor metus aliquam erat volutpat');
        $slider3->setCaption(' Nunc pellentesque suscipit lorem, non volutpat ex mattis id. Vivamus dictum dolor metus. Aliquam erat volutpat. Nunc pellentesque suscipit lorem, non volutpat ex mattis id. Vivamus dictum dolor metus. Aliquam erat volutpat. ');
        $slider3->setActive(true);
        $slider3->setOpenInNewWindow(false);
        $slider3->setUrl($server_base_url.'/quienes-somos');
        $slider3->setOrder(2);
        $this->getManager()->persist($slider3);
     
        $this->getManager()->flush();
        
        $image = new Image();
        $image->setPath('banner.jpg');
        $filename =  __DIR__ . '/../../Resources/public/images/banner.jpg' ;
        copy($filename, __DIR__ . '/../../../../web/uploads/images/banner.jpg' );
        $slider->setImage($image);
        $this->getManager()->persist($image);
        
        $image2 = new Image();
        $image2->setPath('banner2.jpg');
        $filename =  __DIR__ . '/../../Resources/public/images/banner2.jpg';
        copy($filename, __DIR__ . '/../../../../web/uploads/images/banner2.jpg' );
        $slider2->setImage($image2);
        $this->getManager()->persist($image2);
        
        $image3 = new Image();
        $image3->setPath('banner3.jpg');
        $filename =  __DIR__ . '/../../Resources/public/images/banner3.jpg';
        copy($filename, __DIR__ . '/../../../../web/uploads/images/banner3.jpg' );
        $slider3->setImage($image3);
        $this->getManager()->persist($image3);
        
        $this->getManager()->flush();
        
        
    }
    
    
    public function createBlogFixtures()
    {
        //categories
        $category = new Category();
        $category->setName('Kundalini Yoga');
        $this->getManager()->persist($category);
        
        $category2 = new Category();
        $category2->setName('Reiki');
        $this->getManager()->persist($category2);
        
        $category3 = new Category();
        $category3->setName('Naturopatía');
        $this->getManager()->persist($category3);
        
        $category4 = new Category();
        $category4->setName('Inicicación Reiki');
        $this->getManager()->persist($category4);
        
        $category5 = new Category();
        $category5->setName('Retiros');
        $this->getManager()->persist($category5);
        
        $category6 = new Category();
        $category6->setName('Festivales y eventos');
        $this->getManager()->persist($category6);
 
        $tags = array(
                'Energia',
                'Espiritualidad',
                'Yoga',
                'Kundalini',
                'Yogi Bhajan',
                '3HO',
                'AEKY',
                'KRI',
                'Conciencia',
                'Karma',
                'Plantas medicinales',
                'Flores de Bach',
                'Ancestros',
                'Mujer',
                'Luna roja',
                'Ciclo lunar',
                'Emarazadas',
                'Yoga para embarazadas'
                );
        
        foreach ($tags as $tagName) {
            $tag = new Tag();
            $tag->setName($tagName);
            $tag->setMetaTitle($tagName);
            $tag->setMetaDescription($tagName);
            $this->getManager()->persist($tag);
        }
        
        $this->getManager()->flush();
        
        /*
         * Post
         */
        $core = $this->container->getParameter('core');
        $server_base_url = $core['server_base_url'];
        $actor = $this->getManager()->getRepository('CoreBundle:Actor')->findOneByEmail('admin@admin.com');
        
        //Create post
        $post = new Post();
        $post->setTitle('A RUTRUM NIBH UT CEP AENEAN SED TEMPUS VEL. SIT ORNARE NON AENEAN.');
        $post->setDescription('<p>Phasellus <i>laoreet massa id justo mattis pharetra</i>. '
                . 'Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris '
                . 'sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique '
                . 'at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem '
                . 'sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat '
                . 'Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra'
                . ' sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur'
                . ' leo nibh, rutrum eu malesuada in, <b>tristique at erat.</b></p>'
                . '<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus</p>'
                );
        $post->setHighlighted(true);
        $post->setActor($actor);
        $this->getManager()->persist($post);
        
        $post2 = new Post();
        $post2->setTitle('AT COL DUIS, ENIM PRIMIS ET CURSUS MUS PROIN LECTUS CRAS DICTUM');
        $post2->setDescription('<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat.</p>'
                . '<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus</p>'
                . '<p>Phasellus <i>laoreet massa id justo mattis pharetra</i>. '
                . 'Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris '
                . 'sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique '
                . 'at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem '
                . 'sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat '
                . 'Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra'
                . ' sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur'
                . ' leo nibh, rutrum eu malesuada in, <b>tristique at erat.</b></p>');
        $post2->setHighlighted(true);
        $post2->setActor($actor);
        $this->getManager()->persist($post2);
        
        $post2 = new Post();
        $post2->setTitle('AT COL DUIS, ENIM PRIMIS ET CURSUS MUS PROIN LECTUS CRAS DICTUM');
        $post2->setDescription('<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat.</p>'
                . '<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus</p>'
                . '<p>Phasellus <i>laoreet massa id justo mattis pharetra</i>. '
                . 'Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris '
                . 'sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique '
                . 'at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem '
                . 'sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat '
                . 'Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra'
                . ' sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur'
                . ' leo nibh, rutrum eu malesuada in, <b>tristique at erat.</b></p>');
        $post2->setHighlighted(true);
        $post2->setActor($actor);
        $this->getManager()->persist($post2);
        
        $post3 = new Post();
        $post3->setTitle('AT COL DUIS, ENIM PRIMIS ET CURSUS MUS PROIN LECTUS CRAS DICTUM');
        $post3->setDescription('<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat.</p>'
                . '<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus</p>'
                . '<p>Phasellus <i>laoreet massa id justo mattis pharetra</i>. '
                . 'Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris '
                . 'sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique '
                . 'at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem '
                . 'sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat '
                . 'Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra'
                . ' sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur'
                . ' leo nibh, rutrum eu malesuada in, <b>tristique at erat.</b></p>');
        $post3->setHighlighted(true);
        $post3->setActor($actor);
        $this->getManager()->persist($post3);
        
        $post4 = new Post();
        $post4->setTitle('AT COL DUIS, ENIM PRIMIS ET CURSUS MUS PROIN LECTUS CRAS DICTUM');
        $post4->setDescription('<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat.</p>'
                . '<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus</p>'
                . '<p>Phasellus <i>laoreet massa id justo mattis pharetra</i>. '
                . 'Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris '
                . 'sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique '
                . 'at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem '
                . 'sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat '
                . 'Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra'
                . ' sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur'
                . ' leo nibh, rutrum eu malesuada in, <b>tristique at erat.</b></p>');
        $post4->setHighlighted(true);
        $post4->setActor($actor);
        $this->getManager()->persist($post4);
        
        $post5 = new Post();
        $post5->setTitle('AT COL DUIS, ENIM PRIMIS ET CURSUS MUS PROIN LECTUS CRAS DICTUM');
        $post5->setDescription('<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat.</p>'
                . '<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus</p>'
                . '<p>Phasellus <i>laoreet massa id justo mattis pharetra</i>. '
                . 'Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris '
                . 'sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique '
                . 'at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem '
                . 'sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat '
                . 'Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra'
                . ' sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur'
                . ' leo nibh, rutrum eu malesuada in, <b>tristique at erat.</b></p>');
        $post5->setHighlighted(true);
        $post5->setActor($actor);
        $this->getManager()->persist($post5);
        
        $post6 = new Post();
        $post6->setTitle('AT COL DUIS, ENIM PRIMIS ET CURSUS MUS PROIN LECTUS CRAS DICTUM');
        $post6->setDescription('<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat.</p>'
                . '<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus</p>'
                . '<p>Phasellus <i>laoreet massa id justo mattis pharetra</i>. '
                . 'Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris '
                . 'sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique '
                . 'at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem '
                . 'sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat '
                . 'Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra'
                . ' sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur'
                . ' leo nibh, rutrum eu malesuada in, <b>tristique at erat.</b></p>');
        $post6->setHighlighted(true);
        $post6->setActor($actor);
        $this->getManager()->persist($post6);
        
        $post7 = new Post();
        $post7->setTitle('AT COL DUIS, ENIM PRIMIS ET CURSUS MUS PROIN LECTUS CRAS DICTUM');
        $post7->setDescription('<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat.</p>'
                . '<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus</p>'
                . '<p>Phasellus <i>laoreet massa id justo mattis pharetra</i>. '
                . 'Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris '
                . 'sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique '
                . 'at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem '
                . 'sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat '
                . 'Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra'
                . ' sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur'
                . ' leo nibh, rutrum eu malesuada in, <b>tristique at erat.</b></p>');
        $post7->setHighlighted(true);
        $post7->setActor($actor);
        $this->getManager()->persist($post7);
        
        
        
     
        $this->getManager()->flush();
        
        /*
         * Muss put blog image in fron bundle /public/images
         */
        $this->get('blog_manager')->addBlogImage('pic04.jpg', $post, __DIR__);
        $this->get('blog_manager')->addBlogImage('pic05.jpg', $post2, __DIR__);
        $this->get('blog_manager')->addBlogImage('pic06.jpg', $post3, __DIR__);
        $this->get('blog_manager')->addBlogImage('pic07.jpg', $post4, __DIR__);
        
        $this->getManager()->flush();
        
    }


    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
