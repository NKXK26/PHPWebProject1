data "aws_ami" "latest_amazon_linux" {
  most_recent = true
  owners      = ["amazon"]

  filter {
    name   = "name"
    values = ["amzn2-ami-hvm-*-x86_64-gp2"]
  }

  filter {
    name   = "virtualization-type"
    values = ["hvm"]
  }
}

resource "aws_instance" "public_instance" {
  ami           = "${data.aws_ami.latest_amazon_linux.id}" # Dynamically fetched AMI
  instance_type = var.instance_type

  tags = {
    Name = var.name_tag
  }
}
