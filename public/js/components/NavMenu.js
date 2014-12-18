/** @jsx React.DOM */

var NavMenu = React.createClass({
  getInitialState: function(){
    return {
      showMenu: false
    };
  },
  toggleShowMenu: function(){
    this.setState({showMenu: !this.state.showMenu,
                   showUserMenu: false});
  },
  render : function() {
    var showMenu = this.state.showMenu;
    return (
      <div>
        {(showMenu)?
          <div className="menu_menu-items">
            <ListGroup>
              <ListGroupItem>
                <a href={app.config.rootUrl + ""}>Application</a>
              </ListGroupItem>
              <ListGroupItem>
                <a href={app.config.rootUrl + "instructions"}>Instructions</a>
              </ListGroupItem>
              <ListGroupItem>
                <a href={app.config.rootUrl + "about"}>About</a>
              </ListGroupItem>
            </ListGroup>
          </div> : ''}
        <div className={(showMenu)?'menu menu_navbar_show-menu_state':'menu'}>
          <Col xs={12}>
            <div className="pull-left">
              <Button bsStyle="primary" onClick={this.toggleShowMenu}>
                <i className="fa fa-caret-left"></i> <i className="fa fa-bars"></i><span className="hidden-xs"> Menu</span>
              </Button>
            </div>
            <h3 className="pull-left">Terra Charts Map Chat</h3>
          </Col>
          <div className="clearfix"></div>
        </div>
      </div>
    );
  }
});