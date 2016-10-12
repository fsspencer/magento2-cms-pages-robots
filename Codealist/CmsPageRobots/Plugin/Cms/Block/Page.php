<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 8/1/16
 * Time: 13:19
 */

namespace Codealist\CmsPageRobots\Plugin\Cms\Block;


class Page
{
    public function __construct(
        \Magento\Framework\View\Page\Config $pageConfig
    )
    {
        $this->pageConfig = $pageConfig;
    }

    public function afterGetPage($subject, $result)
    {
        if ($result->getRobots()) {
            $this->pageConfig->setRobots($result->getRobots());
        }

        return $result;
    }
}