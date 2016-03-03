<?php

namespace Pyz\Zed\Installer\Business\Icecat\Installer;

use Spryker\Shared\Library\BatchIterator\XmlBatchIterator;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\OutputInterface;

class CmsPageInstaller extends AbstractIcecatInstaller
{

    /**
     * @return \Spryker\Shared\Library\BatchIterator\CountableIteratorInterface
     */
    protected function buildBatchIterator()
    {
        return new XmlBatchIterator($this->getXmlDataFilename(), 'page');
    }

    /**
     * @return string
     */
    protected function getXmlDataFilename()
    {
        return $this->dataDirectory . '/cms_pages.xml';
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return 'CMS Pages';
    }

}
