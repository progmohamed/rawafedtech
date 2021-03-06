<?php

/* TaskPostsBundle:Default:posts.html.twig */
class __TwigTemplate_3b1724228475d4f36abdbb56a8ce691f136c0cf8a543d42d25a8bbec21547a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TaskPostsBundle:Default:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TaskPostsBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Retrieve posts";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    
  ";
        // line 6
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " 
      <div class=\"panel ";
            // line 7
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "panel-success", 1 => "panel-info"), $this->getAttribute($_loop_, "index0", array())), "html", null, true);
            echo "\">
        <div class=\"panel-heading\">";
            // line 8
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title", array()), "html", null, true);
            echo " ";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->env->getExtension('braincrafted_bootstrap_label')->labelSuccessFunction($this->getAttribute($this->getAttribute($_post_, "categoryID", array()), "name", array()));
            echo " ";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->env->getExtension('braincrafted_bootstrap_label')->labelInfoFunction(twig_date_format_filter($this->env, $this->getAttribute($_post_, "publishDate", array()), "Y-m-d"));
            echo "</div>
        <div class=\"panel-body\">";
            // line 9
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "content", array()), "html", null, true);
            echo "</div>
     </div>
      
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    


";
    }

    public function getTemplateName()
    {
        return "TaskPostsBundle:Default:posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 13,  85 => 9,  74 => 8,  69 => 7,  49 => 6,  46 => 5,  43 => 4,  37 => 2,  11 => 1,);
    }
}
