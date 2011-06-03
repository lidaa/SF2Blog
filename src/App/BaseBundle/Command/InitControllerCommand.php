<?phpnamespace App\BaseBundle\Command;use Symfony\Component\Console\Input\InputArgument,    Symfony\Component\Console\Input\InputOption,    Symfony\Component\Console\Input\InputInterface,    Symfony\Component\Console\Output\OutputInterface,    Symfony\Component\Console\Output\Output,    Symfony\Bundle\FrameworkBundle\Generator\Generator,    Symfony\Bundle\FrameworkBundle\Command\Command,    ZR\CoreBundle\Generator\ControllerGenerator;/** * Initializes a new controller. * * @author Oukha Adil */class InitControllerCommand extends Command {    /**     * @see Command     */    protected function configure() {        $this                ->setName('init:controller')                ->setDescription('Initializes controller classe')                ->addArgument('bundleName', InputArgument::REQUIRED, 'The bundle to initialize the controller')                ->addArgument('controllerName', InputArgument::REQUIRED, 'The bundle to initialize the controller')                ->addOption('actions', null, InputOption::VALUE_OPTIONAL, 'The list of actions to create with this controller')                ->setHelp(<<<EOTThe <info>init:controller</info> command generates controller classe :You have to limit generation of controller to an individual bundle:  <info>./app/console init:controller MyCustomBundle</info>Alternatively, you can to use the option "actions" in order to generate a list of actions:(i.e: --actions=create     =>    createAction(){} )   <info>./app/console init:controller "MyCustomBundle" --actions="actionName_1 actionName_2 ... actionName_n" </info>EOT        );    }    protected function execute(InputInterface $input, OutputInterface $output) {        $bundleName = $input->getArgument('bundleName');        $controllerName = ucfirst($input->getArgument('controllerName'));        $listActions = $input->getOption('actions');        $templateEngine = 'php';        if (preg_match('/Controller$/', $controllerName) || preg_match('/controller$/', $controllerName)) {            throw new \InvalidArgumentException('The controller name must end without "Controller".');        }        $foundBundle = $this->getApplication()->getKernel()->getBundle($bundleName);        $pathController = $foundBundle->getPath() . "/Controller/$controllerName" . "Controller.php";        $nameSpace = $foundBundle->getNamespace() . '\Controller';        $resourcesPath = $foundBundle->getPath() . '/Resources';        $viewsPath = $resourcesPath . '/views/' . $controllerName;        if (file_exists($pathController)) {            throw new \RuntimeException(sprintf('Controller "%s" already exists.', $controllerName));        }                // generate new controller        $controllerGenerator = new ControllerGenerator();        file_put_contents($pathController, $controllerGenerator->generateControllerCode($listActions));        Generator::renderFile($pathController, array(            'nameSpace' => $nameSpace,            'bundleName' => $bundleName,            'controllerName' => $controllerName,            'templateEngine' => $templateEngine,        ));        // creation of files actions        mkdir($viewsPath, 0777);        if ($listActions) {            $e = explode(' ', trim($listActions));            $actionsCode = "";            foreach ($e as $value) {                file_put_contents("$viewsPath/$value.html.$templateEngine", $value);            }        }                // displaying messages        $output->writeln(sprintf('- The controller "<info>%s</info>" was created successfully.', $controllerName));        $output->writeln('<comment>Summary of actions</comment>');        $output->writeln(sprintf('- The controller using the namespace "<info>%s</info>".', $nameSpace));        $output->writeln(sprintf('- The controller contains actions and a sample templates'));    }}