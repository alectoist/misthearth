<?php

namespace Misthearth\ThreadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Misthearth\ThreadBundle\Entity\Thread;
use Misthearth\ThreadBundle\Entity\Post;

class LoadThreadData implements FixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {

        $contentList = [
            0 => 'Fusce nec felis mi. Praesent maximus ante velit',
            1 => 'Morbi nascetur a suspendisse scelerisque venenatis habitant cras a turpis a mollis parturient netus consectetur ridiculus enim. A parturient duis vel sociosqu a dis in gravida scelerisque tristique id leo parturient varius sagittis a nibh ultricies parturient curae augue dictumst consectetur hac est ut vivamus. Erat etiam adipiscing a taciti aptent feugiat dignissim euismod vestibulum lectus vestibulum a eros at feugiat a parturient proin a a hac sodales. Rutrum tristique eros ultricies hendrerit nam eros eu praesent nibh consequat scelerisque suscipit a maecenas lacus eu.',
            2 => 'Vestibulum hac vulputate tincidunt tincidunt suspendisse ac placerat ad viverra molestie aenean enim vehicula facilisis adipiscing ornare. Purus vestibulum ut suspendisse enim a amet scelerisque adipiscing parturient a scelerisque praesent aenean vel eget suspendisse urna posuere a mi a ullamcorper senectus. Laoreet ligula lacinia ut imperdiet a inceptos adipiscing vestibulum feugiat a montes vitae parturient sagittis sociosqu nulla eleifend iaculis vel ultrices ipsum porta eros in vivamus a phasellus consectetur. A elit mus tempus porttitor dui a condimentum a nibh sociosqu vestibulum pulvinar euismod pulvinar adipiscing convallis egestas vestibulum inceptos dapibus habitant. Mattis vestibulum per gravida sociis accumsan suspendisse torquent suspendisse quam eu eu accumsan sodales hac maecenas id. Montes in dui conubia duis congue urna habitant adipiscing egestas enim a diam praesent a ullamcorper lacus a diam nunc.',
            3 => 'Varius sit consequat at donec sem ut eros vestibulum scelerisque taciti laoreet parturient parturient hendrerit fermentum enim natoque auctor scelerisque ultricies a at himenaeos curabitur. A ac sociis scelerisque ullamcorper non torquent torquent luctus scelerisque a fusce a a malesuada quam fusce penatibus. Dictum class eu eleifend parturient lobortis cras a suspendisse vel scelerisque a adipiscing neque tortor eu a ut mi semper vestibulum.',
            4 => 'Consectetur adipiscing varius est id phasellus metus etiam lobortis torquent at duis varius a a sed nunc montes proin a ullamcorper suspendisse orci condimentum malesuada condimentum. Adipiscing a ultrices gravida convallis turpis a a ad facilisis condimentum consectetur netus suspendisse suspendisse a dictumst aliquet curabitur pharetra et torquent. Volutpat mi vestibulum morbi scelerisque a taciti iaculis facilisis ullamcorper potenti parturient mi maecenas metus laoreet scelerisque sodales vivamus cras elementum a. Lobortis ac iaculis etiam felis posuere diam odio nam a elit id condimentum vestibulum adipiscing ullamcorper gravida eu suscipit nec fusce ultricies sodales fusce lectus suspendisse vestibulum. Amet sociosqu consectetur habitasse parturient ad a sit urna mauris ornare ac dictum ipsum velit gravida in eu.',
            5 => 'Nisi parturient himenaeos aliquet tristique vivamus convallis et a vel per suspendisse dolor scelerisque nascetur proin vestibulum phasellus hendrerit parturient eu a ut ante. Tempor convallis at ad a semper vestibulum consequat nulla donec lacinia ac vestibulum mattis a sed id dolor duis a vestibulum. Pretium faucibus integer purus purus vestibulum leo adipiscing sodales ultricies a neque enim gravida adipiscing tellus.',
            6 => 'Tristique viverra adipiscing ut sed a erat a magnis parturient ullamcorper suspendisse et orci sed a class accumsan tellus vestibulum condimentum justo vestibulum hendrerit metus. Donec vulputate enim a a commodo per et potenti scelerisque ipsum condimentum ridiculus augue magna mauris libero mi viverra faucibus eleifend eget bibendum purus ultricies. A ut parturient mi torquent etiam parturient fermentum platea nullam elit blandit metus himenaeos adipiscing adipiscing condimentum eget a massa natoque magna aliquet massa. Vestibulum ullamcorper blandit porttitor viverra id accumsan mus ullamcorper tincidunt euismod et porttitor parturient amet adipiscing torquent parturient nunc a sodales cubilia ad consequat in magnis egestas posuere. In malesuada scelerisque fringilla ornare condimentum vestibulum primis nisl penatibus parturient cubilia nisl scelerisque ac cras in a. Class inceptos senectus lacinia nascetur interdum suscipit at tempus non a fermentum venenatis velit viverra cum bibendum ridiculus posuere viverra id vehicula a sociis condimentum accumsan.',
            7 => 'Scelerisque condimentum sit ullamcorper placerat molestie gravida vestibulum nascetur eu sociosqu duis natoque ut ullamcorper odio mus eu primis ac nascetur a eu aptent rhoncus a dictum maecenas. Aliquet proin curabitur a orci a laoreet vestibulum nascetur bibendum a tincidunt inceptos integer a a aenean phasellus arcu felis sed non a consectetur praesent quam himenaeos fermentum consectetur. Per etiam commodo malesuada suspendisse rutrum a vivamus a orci pulvinar id phasellus a elementum morbi. Porta a volutpat mauris nibh conubia tempus sed dapibus est mi mollis adipiscing suspendisse suspendisse ullamcorper orci condimentum ac arcu scelerisque nisl pulvinar rhoncus mi tristique. Amet tortor libero netus sapien duis fringilla sit curabitur conubia parturient pulvinar at per condimentum elit habitasse magna scelerisque curae ullamcorper hendrerit ac a nunc. Enim vestibulum hendrerit suspendisse condimentum quam tincidunt etiam porta a neque cubilia sem fringilla conubia suspendisse mattis convallis nam.',
            8 => 'Penatibus posuere vestibulum orci dis vestibulum sed tempus quisque augue vestibulum scelerisque vel auctor non id per mus ullamcorper suspendisse curabitur dui. Nisl a a ante risus pulvinar dui bibendum adipiscing dapibus odio et condimentum a a ad convallis suspendisse. Nullam montes condimentum gravida volutpat suspendisse lobortis vestibulum est penatibus fusce parturient at mollis arcu faucibus ut nibh pulvinar per enim ipsum netus nisl id senectus. Laoreet adipiscing per a a suspendisse gravida suspendisse suspendisse arcu adipiscing tristique ad interdum maecenas ad parturient felis scelerisque mi est mi lectus. Adipiscing vestibulum dis vivamus consectetur sit lacinia condimentum etiam ullamcorper in vulputate condimentum sed quisque massa rutrum mus pulvinar. A dictumst etiam sem penatibus leo sociis maecenas vestibulum dictum malesuada malesuada condimentum ac a vestibulum congue.',
            9 => 'Lorem dapibus donec cras per suspendisse nisi mus proin erat cras orci augue faucibus ad vestibulum ullamcorper eleifend phasellus a. Magna nibh a suspendisse eu platea ullamcorper volutpat eleifend a consectetur condimentum elementum sociosqu primis accumsan a ad in maecenas odio ullamcorper consectetur dis curae nec adipiscing. A praesent senectus velit vestibulum ipsum leo urna ullamcorper tincidunt posuere a a fames eu. A fusce praesent parturient eget risus nunc leo consequat porta adipiscing vivamus mus elit suspendisse malesuada ullamcorper non a. Arcu erat adipiscing tincidunt a quisque ante integer sociis ultricies vestibulum curae imperdiet lacus convallis adipiscing scelerisque viverra elementum viverra ac aptent hac ad ad.'
        ];
        
        $titleList = [
            0 => 'Ipsum consectetur',
            1 => 'A quisque libero ',
            2 => 'Eros ullamcorper faucibus vestibulum',
            3 => 'Lacus lacus ut justo ut dis',
            4 => 'Nec sagittis a senectus tristique scelerisque',
            5 => 'Parturient at a pretium id molestie',
            6 => 'Orci quis diam a hac nec lobortis',
            7 => 'In malesuada ut adipiscing',
            8 => 'Accumsan',
            9 => 'Tristique',
        ];
        
        for ($i=0; $i < 11; $i++) { 
            
        $date = new \DateTime;

        $thread = new Thread();
        $thread->setTitle($titleList[array_rand($titleList)]);
        
            for ($o=0; $o < 4; $o++) { 
            
                $post = new Post();
        
                $post->setTitle($titleList[array_rand($titleList)]);
                $post->setBody($contentList[array_rand($contentList)]);
                $post->setThread($thread);
                
                $manager->persist($post);
    
                $thread->addPost($post);
    
            }

            $manager->persist($thread);

        }

        $manager->flush();

    }

}
