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



        $thread = new Thread();
        $thread->setTitle('Fusce nec felis mi. Praesent maximus ante velit');
        $thread->setCreationDate(new \DateTime);
        $post = new Post();

        $post->setTitle('Fusce nec felis mi. Praesent maximus ante velit');
        $post->setBody('Pellentesque lobortis felis nec dolor euismod, et ornare dui ullamcorper. In quis elit vitae enim pulvinar fringilla. Mauris arcu augue, aliquet ac nulla ac, maximus elementum metus. Vestibulum at dui a velit fringilla auctor. Ut pharetra leo nibh, nec interdum sem aliquet quis. Vestibulum id augue cursus, rhoncus massa et, condimentum sem. Vestibulum tincidunt euismod enim, in ornare metus auctor ac. Ut tincidunt pretium augue vitae sagittis. Fusce blandit dapibus arcu, vel viverra nulla sollicitudin non. Sed lacus augue, vulputate et vulputate non, suscipit non tortor. Morbi posuere eu libero ac congue. Nam eleifend diam vel velit fringilla interdum. Praesent tincidunt in neque nec tincidunt. Vestibulum quis ipsum urna. Vestibulum tincidunt leo id commodo tristique. ');
        $post->setThread($thread);
        $post->setCreationDate(new \DateTime);
        $manager->persist($post);




        $thread->addPost($post);

        $manager->persist($thread);


        $manager->flush();
    }

}
