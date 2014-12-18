/** @jsx React.DOM */

var ChatModal = React.createClass({
  getInitialState: function () {
    return {
      show: false
    };
  },
  getDefaultProps: function () {
    return {
      messages: []
    };
  },
  show: function () {
    this.setState({show: true});
  },
  hide: function () {
    this.setState({show: false});
  },
  addMessage: function (e) {
    console.log('adding message!');
    console.log(this.refs.messageInput.getValue());
    var value = this.refs.messageInput.getValue();
    if(value) {
      // Send an AJAX call to applicationctrl@addMessage
    } else {
      alert('Please input a message!');
    }
  },
  updateMessages: function (messages) {
    this.setProps({messages: messages});
  },
  render: function () {
    return (
      <div>
        {(this.state.show)?
          <Modal className="chat-modal" title="Chat Modal" animation={true} onRequestHide={this.hide}>
            <div className="chat-modal_body modal-body">
              {this.props.messages.map(function (message) {
                return (<Row>
                          <Col xs={3} className="messenger">Anonymous says:</Col>
                          <Col xs={9} className="message">{message.message}</Col>
                        </Row>);
              })}
            </div>
            <div className="chat-modal_footer modal-footer">
              <Row>
                <Col xs={9}>
                  <Input ref="messageInput" type="text" help="Enter in your anonymous message"/>
                </Col>
                <Col xs={3}>
                  <Button bsStyle="primary" className="form-control" onClick={this.addMessage}>Submit <i className="fa fa-send-o"></i></Button>
                </Col>
              </Row>
            </div>
          </Modal>
          : null}
      </div>
    );
  }
});
