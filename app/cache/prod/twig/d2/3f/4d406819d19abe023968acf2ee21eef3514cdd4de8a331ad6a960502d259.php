<?php

/* TaskPostsBundle:Default:create.html.twig */
class __TwigTemplate_d23f4d406819d19abe023968acf2ee21eef3514cdd4de8a331ad6a960502d259 extends Twig_Template
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
        echo "Create Post";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Create post</div>
        <div class=\"panel-body\">
            ";
        // line 8
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start');
        echo "
                ";
        // line 9
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "title", array()), 'row');
        echo "
                ";
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "content", array()), 'row');
        echo "
                ";
        // line 11
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "categoryID", array()), 'row');
        echo "    
        
                <div class=\"form-group ";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "publishDate", array()), "vars", array()), "errors", array())) > 0)) {
            echo "has-error";
        }
        echo " \">
                    <label for=\"form_publishDate\" class=\"control-label required\">Date Picking</label>
                    <div class=\"input-group date form_date col-md-5\" data-date=\"\" data-date-format=\"dd MM yyyy\" data-link-field=\"form_publishDate\" data-link-format=\"yyyy-mm-dd\">
                        ";
        // line 16
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "publishDate", array()), 'widget');
        echo "
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                    </div>
                        ";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "publishDate", array()), 'errors');
        echo "
                    <input type=\"hidden\" id=\"form_publishDate\" value=\"\" /><br/>
                </div>
        
                ";
        // line 23
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "save", array()), 'row');
        echo "    
             ";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "
            
        </div>
     </div>
";
    }

    public function getTemplateName()
    {
        return "TaskPostsBundle:Default:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  96 => 23,  88 => 19,  81 => 16,  72 => 13,  66 => 11,  61 => 10,  56 => 9,  51 => 8,  46 => 5,  43 => 4,  37 => 2,  11 => 1,);
    }
}
