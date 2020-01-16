<?php
namespace ThaiNQ\Faq\Block;


class Index extends \Magento\Framework\View\Element\Template
{

    protected $faqFactory;
    protected $_filterProvider;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        \ThaiNQ\Faq\Model\FaqFactory $faqFactory
    )
    {
        $this->faqFactory = $faqFactory;
        $this->_filterProvider = $filterProvider;
        parent::__construct($context);
    }

    public function getAllDatas(){
        $faq = $this->faqFactory->create()->getCollection()->addFieldToFilter('status', 1)->setOrder('sort_order', 'DESC')->getData();
        return $faq;
    }

    public function getAnswer($content=''){
        $html = $this->_filterProvider->getPageFilter()->filter($content);
        return $html;
    }
}