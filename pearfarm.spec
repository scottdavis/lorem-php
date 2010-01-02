<?php

$spec = Pearfarm_PackageSpec::create(array(Pearfarm_PackageSpec::OPT_BASEDIR => dirname(__FILE__)))
             ->setName('Lorem_php')
             ->setChannel('jetviper21.pearfarm.org')
             ->setSummary('A Latin generator for php handy for populating test data or designs')
             ->setDescription('A Latin generator for php handy for populating test data or designs')
             ->setReleaseVersion('0.0.1')
             ->setReleaseStability('alpha')
             ->setApiVersion('0.0.1')
             ->setApiStability('alpha')
             ->setLicense(Pearfarm_PackageSpec::LICENSE_MIT)
             ->setNotes('Initial release.')
             ->addMaintainer('lead', 'Scott Davis', 'jetviper21', 'jetviper21@gmail.com')
						 ->setDependsOnPHPVersion('5.3')
             ->addGitFiles();