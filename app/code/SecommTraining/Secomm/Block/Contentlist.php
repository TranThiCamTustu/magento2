<?php
namespace SecommTraining\Secomm\Block;

use Magento\Framework\View\Element\Template;
use SecommTraining\Secomm\Model\ResourceModel\Post\CollectionFactory;
use Magento\Framework\App\RequestInterface;
use SecommTraining\Secomm\Model\PostFactory;
class Contentlist extends Template
{
    protected $PostsFactory;
    protected $Request;
    protected $postFactory;
    public function __construct(Template\Context $context, CollectionFactory $postsFactory, RequestInterface $request, PostFactory $postFactory)
    {
        $this->PostsFactory = $postsFactory;
        $this->Request = $request;
        $this->postFactory = $postFactory;
        parent::__construct($context);
    }

    public function GetContent(){
        $page = ($this->getRequest()->getParam('p'))? $this->getRequest()->getParam('p') : 1;
        $limit = ($this->getRequest()->getParam('limit'))? $this->getRequest()->getParam('limit') : 5;

        $blog = $this->postFactory->create()->getCollection();
        $blog->setPageSize($limit);
        $blog->setCurPage($page);
        $blog->setOrder('entity_id','DESC');
        return $blog;
    }

    protected function _prepareLayout(){
        parent::_prepareLayout();
        $this->pageConfig->getTitle()->set(__('Secomm'));

        if ($this->GetContent()){
            $pager = $this->getLayout()->createBlock('Magento\Theme\Block\Html\Pager', 'secommtraining.secomm.pager')
                ->setAvailableLimit(array(5=>5,10=>10,15=>15,20=>20))
                ->setShowPerPage(true)
                ->setCollection($this->GetContent());

            $this->setChild('pager', $pager);

            $this->GetContent()->load();
        }
        return $this;
    }

    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }

    public function getImagePath()
    {
        $imagePath = $this->_storeManager->getStore()
            ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        return $imagePath .'secomm/';
    }

}
